<?php

/**
 * fonctions d'accès à la table author
 * 
 * CRUD
 */

require_once __DIR__ . '/pdo.php';

/**
 * retourne la liste des auteurs
 * @param PDO $pdo
 * @return array
 */
function findAll(PDO $pdo): array
{
    $sql = 'SELECT * FROM author';
    $q = $pdo->query($sql);
    return $q->fetchAll();
}