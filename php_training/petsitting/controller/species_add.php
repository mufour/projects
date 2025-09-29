<?php

define('ROOT', dirname(__DIR__));

require_once ROOT . '/utils.php';

if(isset($_POST['species']) && !empty($_POST['species'])) {
$speciesName = trim($_POST['species']);

require_once ROOT . '/species.model.php';

$success = addSpecies($pdo, $speciesName);
if($success) {
    $flashMessage = 'Lespèce a bien été ajouté';
} else {
    $flashMessage = 'erreur';
}

}

require_once ROOT . '/view/species/add.view.php';