<?php

require_once __DIR__ . '/pdo.php';

    function findAll(PDO $pdo): array
    {
    $sql = 'SELECT * FROM animal';
    $q = $pdo->query($sql);
    return $q->fetchAll();
    }

    var_dump($pdo);