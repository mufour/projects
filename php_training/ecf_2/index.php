<?php

require_once 'vendor/autoload.php';

use App\Model\Entity\AuthorEntity;
use App\Model\Entity\QuoteEntity;
use App\Model\Entity\AbstractEntity;
use App\Model\Repository\AbstractRepository;
use App\Model\Repository\AuthorRepository;
use App\Model\Repository\QuoteRepository;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecf2', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    http_response_code(500);
    die('Problème de connexion à la base de données');
}


$bibliotheque = new AuthorRepository($pdo);
dump($bibliotheque->findAll());

$etagere = new AuthorRepository($pdo);
dump($etagere->find(1));

$newWriter = new AuthorRepository($pdo);
$vocation = $newWriter->create([
    'author' => 'Raoul',
    'image' => null,
    'biography' => 'ptn, mais ça marche enfin !!!!!!!!!!!!!!!!!!!'
]);

$livre = new QuoteRepository($pdo);
dump($livre->findAll());

$chapitre = new QuoteRepository($pdo);
dump($chapitre->find(3));

$chapitre = new QuoteRepository($pdo);
dump($chapitre->find(2));

$newQuote = new QuoteRepository($pdo);
$fulgurance = $newQuote->create([
    'quote' => 'jaime manger du chocolat',
    'explanation' => 'ca fait du bien au moral'
]);
