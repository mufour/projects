<?php

/**
 * Composants d'accès aux animaux
 */

require_once __DIR__ . '/model/pdo.php';

/**
 * Renvoie la liste de tous les animaux
 */

function findAllAnimals(PDO $pdo): array
{
    $sql = 'SELECT animal.id, animal.name, animal.is_vaccinated,
DATE_FORMAT(animal.birthday, \'%d/%m/%y\') AS birthday, species.id AS species_id, species.species FROM animal
LEFT JOIN species ON species.id = animal.species_id';
    $q = $pdo->query($sql);

    return $q->fetchAll();
}

function addAnimal($pdo, $name, $species_id, $birthday = null, $is_vaccinated = 0): bool {
    $sql = 'INSERT INTO animal (name, species_id, birthday, is_vaccinated, created_at)
            VALUES (:name, :species_id, :birthday, :is_vaccinated, NOW())';

    $q = $pdo->prepare($sql);
    $q->bindValue('name', $name, PDO::PARAM_STR);
    $q->bindValue('species_id', $species_id, PDO::PARAM_INT);
    $q->bindValue('is_vaccinated', $is_vaccinated, PDO::PARAM_INT);
    if ($birthday === null) {
        $q->bindValue('birthday', null, PDO::PARAM_NULL);
    } else {
        $q->bindValue('birthday', $birthday);
    }


    return $q->execute();
}