<?php

// http://localhost/delete.php?id=x

$post['email'] = 'raoul@dc.fr'; 

require_once __DIR__ . '/pdo.php';

// $sql = //PHPMyAdmin
// $q = $pdo->prepare()
// $q->execute();
// $q->fetch(); Si read ou list
// $q->closeCursor(); // optionnel sur MySQL

$sql = 'SELECT users.password FROM users WHERE users.email = ?';
$q = $pdo->prepare($sql);
$q->execute([$post['email']]);
$mdp = $q->fetchColumn();

print_r($mdp);