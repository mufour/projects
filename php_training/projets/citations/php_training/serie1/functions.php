<?php

$tauxTva = 1;
$prixHt = 100;

function applyTva ($prixHt, $tauxTva)
    {
    if ($tauxTva === 1.055){
        $prixHt * $tauxTva;
    } elseif ($tauxTva === 1.1){
        $prixHt * $tauxTva;
    } elseif ($tauxTva > 1.1){
        $prixHt * 1.2;
    }
    return $prixHt * $tauxTva;
    }
    
    echo applyTva(100, 1.2);