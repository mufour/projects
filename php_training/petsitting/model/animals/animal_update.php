<?php

require_once '../pdo.php';
require_once '../../utils.php';

$update_pet = [
    'id' => '4',
    'name' => 'Ozaru',
    'is_vaccinated' => '1',
    'birthday' => "2000-03-03",
    'species_id' => 2,
    'created_at' => 'NOW()'
];

$sql = 'UPDATE animal SET animal.animal = :animal WHERE id=:id';
$q = $pdo->prepare($sql);
$q->bindValue(':animal', $animal['name']);
$q->bindValue(':animal', $animal['is_vaccinated']);
$q->bindValue(':animal', $animal['birthday']);
$q->bindValue(':animal', $animal['species_id']);
$q->bindValue(':animal', $animal['created_at']);
$success = $q->execute();