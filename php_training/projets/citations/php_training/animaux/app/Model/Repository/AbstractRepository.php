<?php

namespace App\Model\Repository;

use App\Model\Entity\AbstractEntity;
use PDO;

abstract class AbstractRepository
{
    protected PDO $pdo;
    protected string $table;
    protected string $entity;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /* public function statement(string $sql, array $data = null)
    {
        if ($data === null) {

        }
    }
    */

    /**
     * Retourne la liste des espèces
     * @return array liste des entités Espece
     */
    public function findAll(): array
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $q = $this->pdo->query($sql);
        $data = $q->fetchAll();
        $entities = [];
        foreach ($data as $row) {
            $fqcn = 'App\Model\Entity\\' . $this->entity;
            if (class_exists($fqcn)) {
                $entity = new $fqcn();

                $entity->hydrate($row);
                $entities[] = $entity;
            } else {
                throw new \Exception('Problème interne');
            }
        }
        return $entities;
    }

    /**
     * Retourner une espèce depuis son id
     * @param int $id
     * @return object|null
     */
    public function find(int $id): object|null
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';
        $q = $this->pdo->prepare($sql);
        $q->bindValue('id', $id, PDO::PARAM_INT);
        $q->execute();
        $data = $q->fetch();
        if ($data) {
            $fqcn = 'App\Model\Entity\\' . $this->entity;
            if (class_exists($fqcn)) {
                $entity = new $fqcn();
                $entity->hydrate($data);
            }
            return $entity;
        } else {
            return null;
        }
    }

    public function create(array $data): object
    {
        // a refactoriser
        // on est écrit notre ligne SQL
        $v_sql = [];
        $values = [];
        $inter = [];
        foreach ($data as $key => $value) {
            $v_sql[] = $key;
            $values[] = $value;
            $inter[] = '?, ';
        }
        $pouets = "";
        $sql = 'INSERT INTO ' . $this->table . '(';
        foreach ($v_sql as $col) {
            $pouets .=  $col . ', ';
        }
        $pouets = substr($pouets, 0, -2);
        $sql .= $pouets;
        $sql .= ') VALUES (';
        $pouets2 = '';
        foreach ($inter as $value) {
            $pouets2 .= $value;
        }
        $pouets2 = substr($pouets2, 0, -2);
        $sql .= $pouets2 . ')';
        $q = $this->pdo->prepare($sql);
        $q->execute($values);
        $id =  $this->pdo->lastInsertId();
        return $this->find($id);
    }

    public function delete(int $id): bool
    {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE id=:id';
        $q = $this->pdo->prepare($sql);
        $q->bindValue(':id', $id, PDO::PARAM_INT);
        return $q->execute();
    }
}
