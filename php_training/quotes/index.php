<?php

require_once __DIR__ . '/pdo.php';

$id = '2';

$sql = 'SELECT * FROM author WHERE id=?';
$q = $pdo->prepare($sql);
$q->execute([$id]);
$data = $q->fetch();

echo '<pre>';
    print_r($data);
echo '<pre>';