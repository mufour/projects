<?php

// http://localhost/update.php?id=3

$post['email'] = 'tomaspascal@itineris.fr'; 

require_once __DIR__ . '/pdo.php';

$sql = 'UPDATE users SET
email  = :email,
updated_at  = NOW()
WHERE id = :id';
$q = $pdo->prepare($sql);
$q->bindValue('email', $post['email'], PDO::PARAM_STR);
$q->bindValue('id', 14, PDO::PARAM_INT);
$success = $q->execute();