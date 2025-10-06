<?php

$form = [
    "species" => "NAC",
];

require_once '../pdo.php';
require_once '../../utils.php';

$sql = 'INSERT INTO species(species.species) VALUE (:espece)';
$q = $pdo->prepare($sql);
$q->bindValue(':espece', $form['species'], PDO::PARAM_STR);
$success = $q->execute();

echo $pdo->lastInsertId() . '<br>';
var_dump($success);