<?php

$post = [
    'email'=>'AmI22?@test.ntm',
    'password'=>'sautdID',
    'token'=>'tok_ID'
]; // ça on s'imagine que ça vient d'un formulaire et ça a été néttoyé pour XSS

require_once __DIR__ . '/pdo.php';

$sql = 'INSERT INTO users(email, password, token)
VALUES (:email, :password, :token)';
$q = $pdo->prepare($sql);
$q->bindValue(':email', $post['email']);
$q->bindValue(':password', $post['password']);
$q->bindValue(':token', $post['token']);
$retour = $q->execute();

// var_dump($retour);
var_dump($pdo->lastInsertId());