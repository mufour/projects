<?php

$recettes = [
    [
        "id" => 0,
        "nom" => 'Henriette au Paulet',
        "temps_preparation" => 45,
        "difficulte" => 'moyen',
    ],
    [
        "id" => 1,
        "nom" => 'Carlanara',
        "temps_preparation" => 20,
        "difficulte" => 'facile',
    ],
    [
        "id" => 2,
        "nom" => 'Geralquiche Laurette',
        "temps_preparation" => 35,
        "difficulte" => 'facile',
    ]
];

if (!isset($_GET["id"])) { // s'il n'y a pas d'id dans l'url
    echo "<h1>Mais on est où là ?! faut mettre un id mon petit !";
    die;
}
$showRecipe = intval($_GET["id"]); // récupérer la valeur de l'id et la convertir en int (une lettre serait invalideé)

if (isset($recettes[$showRecipe])) { // si l'id est présent dans le tableau, récupérer les paramètres nom, difficulté, etc correspondants
    $recette = $recettes[$showRecipe];
    echo "<h2>{$recette['nom']}</h2>";
    echo "<h4>{$recette['temps_preparation']}</h4>";
    echo "<p>{$recette['difficulte']}</p>";
} else { // si l'id n'existe pas dans le tableau
    echo '<h1>cette recette n\'existe pas !</h1>';
}
?>