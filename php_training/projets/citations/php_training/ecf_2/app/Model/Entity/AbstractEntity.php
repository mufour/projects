<?php

namespace App\Model\Entity;

use App\Model\tests\AbstractEntityTest;
use PDO;

/**
 * Représenter la class AbstractEntity
 */
abstract class AbstractEntity
{
    /**
     * Déterminer un id
     * @var
     */
    private ?int $id = null;

    /**
     * Déterminer un PDO
     * @var PDO
     */
    protected PDO $pdo;

    /**
     * Représenter le PDO
     * @param \PDO $pdo
     */
    public function __construct(?PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Retourner l'id
     * @return string|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Modifier l'id
     * @param mixed $id
     * @return AbstractEntity
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Hydrater un objet
     * @param array $data un tableau
     * @throws \InvalidArgumentException
     * @return AbstractEntity
     */
    public function hydrate(array $data): self
    {
        foreach ($data as $key => $value) {
            $camelCaseKey = str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            $method = 'set' . $camelCaseKey;

            if (method_exists($this, $method)) {
                $this->$method($value);
            } else {
                throw new \InvalidArgumentException('La propriété ' . $key . ' nexiste pas');
            }
        }
        return $this;
    }
}
