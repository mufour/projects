<?php

$taille = 181;
$poids = 73;

$tailleMetre = $taille / 100;

$imc = $poids / ($tailleMetre * $tailleMetre);

// ne pas afficher la ligne du dessous me permet de ne pas l'afficher dans le(s) fichier(s) dans lesquelle j'utilise require_once
// echo 'Votre IMC est de : ' . round($imc, 2); , continues, plus que 2 kilos et tu seras vraiment bien !';