<?php

$form = [
    "name" => "MAAAAAAAAAAAAAAAAAAAAAAAAAAAAARC",
    "is_vaccinated"=> "1",
    "birthday"=> "2020-02-20",
    "species_id"=> "1"
];

require_once '../pdo.php';
require_once '../../utils.php';

$sql = 'INSERT INTO animal(name, is_vaccinated, birthday, species_id) VALUES(:name, :is_vaccinated, :birthday, :species_id)'; 
$q = $pdo->prepare($sql);
$q->bindValue(':name', $form['name'], PDO::PARAM_STR);
$q->bindValue(':is_vaccinated', $form['is_vaccinated'], PDO::PARAM_BOOL);
$q->bindValue(':birthday', $form['birthday'], PDO::PARAM_STR);
$q->bindValue(':species_id', $form['species_id'], PDO::PARAM_INT);
$success = $q->execute();

if ($success) {
    echo $form['name'] . ' a bien été inséré';
} else {
    die("mince alors");
}