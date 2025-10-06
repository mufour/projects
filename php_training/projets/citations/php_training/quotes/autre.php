<?php

require_once __DIR__ . '/pdo.php';

// $sql = //PHPMyAdmin
// $q = $pdo->prepare()
// $q->execute();
// $q->fetch(); Si read ou list
// $q->closeCursor(); // optionnel sur MySQL

// METHODE 1
//$sql = 'SELECT * FROM author WHERE id=?';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['4']);
//$author = $stmt->fetch();

// METHODE 2
//$sql = 'SELECT * FROM author WHERE id=:id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['id'=>'4']);
//$author = $stmt->fetch();

// METHODE 3
$sql = 'SELECT * FROM author WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', '2', PDO::PARAM_INT);
$stmt->execute();
$author = $stmt->fetch();

echo '<pre>';
print_r($author);
echo '</pre>';