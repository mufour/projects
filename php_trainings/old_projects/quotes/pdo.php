<?php


$dsn = 'mysql:host=localhost;dbname=quotes';

try{
$pdo = new PDO($dsn, 'root', '');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    http_response_code(response_code:500);
    die('Probleme avec la BDD');
}

// var_dump($pdo);