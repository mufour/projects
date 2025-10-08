<?php

use App\Model\Repository\AnimalRepository;
use App\Model\Repository\EspeceRepository;

require_once 'vendor/autoload.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=animaux', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    http_response_code(500);
    die('Problème de connexion à la base de données');
}

// $humain  = new EspeceRepository($pdo);
// $obj = $humain->create(['espece' => 'humain']);
// $trucmanager = new AnimalRepository($pdo);
// $odin = $trucmanager->create(['nom' => 'odin', 'espece_id' => $obj->getId()]);

// $especeManager = new EspeceRepository($pdo);
// $obj = $piaf->$especeManager->create(['nom'=> 'piaf','espece_id' => $obj->getId()]);
// $brambelion = $trucmanager->create(['nom'=> 'brambelion', 'espece_id' => $obj->getId()]);
// dd($odin, $brambelion);