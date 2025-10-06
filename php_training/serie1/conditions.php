<?php

require_once "variables.php";

$msg = '';

if ($imc < 25){
    $msg = 'Vous avez un poids normal';
} elseif ($imc < 30){
    $msg = 'Vous êtes en surpoids';
} elseif ($imc < 35){
    $msg = 'Vous êtes modéremment obèse';
} elseif ($imc > 40){
    $msg = 'Vous êtes massivement obèse';
}

echo 'Votre  imc est de : ' . $imc . '. ' . $msg . "\n";