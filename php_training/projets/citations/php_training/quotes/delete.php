<?php

// http://localhost/delete.php?id=3

$get['id'] = 21; // ça on s'imagine que ça vient d'un formulaire et ça a été néttoyé pour XSS

require_once __DIR__ . '/pdo.php';

$sql = 'DELETE FROM users WHERE id=?';
$q = $pdo->prepare($sql);
$success = $q->execute([$get['id']]);

var_dump($success);
