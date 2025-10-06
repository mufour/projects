<?php

$recettes = [
    [
        "nom" => 'Henriette au Paulet',
        "temps_preparation" => 45,
        "difficulte" => 'moyen',
    ],
    [
        "nom" => 'Carlanara',
        "temps_preparation" => 20,
        "difficulte" => 'facile',
    ],
    [
        "nom" => 'Geralquiche Laurette',
        "temps_preparation" => 35,
        "difficulte" => 'facile',
    ]

    ];

    foreach ($recettes as $recette) {
        echo "<ul>";
        echo "<li><h2>Nom : " . $recette["nom"] . "</h2></li>";
        echo "<li><h5>Le temps de préparation est de : " . $recette["temps_preparation"] . " minutes</h5></li>";
        echo "<li><p>Niveau de difficulté : " . $recette["difficulte"] . "</p></li>";
        echo "</ul><hr>";
    }
