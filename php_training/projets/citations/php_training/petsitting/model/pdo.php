<?php

try {
    $dns = 'mysql:host=localhost;dbname=petsitting';
    $pdo = new PDO($dns, username: 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    http_response_code(500);
    echo 'Connexion échouée : ' . $e->getMessage();
}