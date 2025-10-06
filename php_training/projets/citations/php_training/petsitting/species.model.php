<?php

/**
 * Composant d'accès aux espèces
 */

require_once __DIR__ . '/model/pdo.php';

/**
 * Renvoie la liste de toutes les espèces
 * @param mixed $pdo
 * @return array
 */
function findAllSpecies($pdo): array {
    $sql = 'SELECT id, species FROM species';
    $q = $pdo->query($sql);
    return $q->fetchAll();
}

/**
 * Ajouter une espèce
 * @param PDO $pdo
 * @param string $species espèces à ajouter
 * @return bool
 */
function addSpecies($pdo, $species): bool {
    $sql = 'INSERT INTO species (species) VALUES (:species)';
    $q = $pdo->prepare($sql);
    $q->bindValue('species', $species, PDO::PARAM_STR);
    return $q->execute();
} 