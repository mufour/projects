<?php

$prixht = 100;
$tva5 = 1.055;

function prixTtc($prixHt, $tauxTva):float
    {
        return $prixHt * $tauxTva;
    }


echo 'Avec une TVA à 5.5% : ' . prixTtc(100, 1.055) . ' €<br>';
echo 'Avec une TVA à 10% : ' . prixTtc(100, 1.1) . ' €<br>';
echo 'Avec une TVA à 20% : ' . prixTtc(100, 1.2) . ' €<br>';