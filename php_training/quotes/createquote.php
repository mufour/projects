<?php

$post =  [
        'id' => 10,
        'author_id' => 1,
        'quote_content' => "Dormir, c’est comme charger son téléphone… sauf que moi, je reste toujours à 15%.",
        'quote_explanation' => "Humour sur la fatigue chronique."
    ]; // ça on s'imagine que ça vient d'un formulaire et ça a été néttoyé pour XSS

require_once __DIR__ . '/pdo.php';

// forech($quotes as $post) { $sql  = insert into..... $q-> execute();} PERMET DINSERER PLUSIERS QUOTES DANS LA TABLE
$sql = 'INSERT INTO quote(quote_content, quote_explanation, author_id)
VALUES (:quote_content, :quote_explanation, :author_id)';
$q = $pdo->prepare($sql);
$q->bindValue(':quote_content', $post['quote_content']);
$q->bindValue(':quote_explanation', $post['quote_explanation']);
$q->bindValue(':author_id', $post['author_id']);
$retour = $q->execute();

// var_dump($retour);
var_dump($pdo->lastInsertId());