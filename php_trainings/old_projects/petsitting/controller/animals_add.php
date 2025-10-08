<?php

define('ROOT', dirname(__DIR__));

require_once ROOT . '/utils.php';

if (isset($_POST['animals']) && !empty($_POST['animals'])) {
    $animalsName = trim($_POST['animals']);
    $species_id = (int) $_POST['species_id'];
    $birthday = !empty($_POST['birthday']) ? $_POST['birthday'] : null;
    $is_vaccinated = isset($_POST['is_vaccinated']) ? (int) $_POST['is_vaccinated'] : 0;
    require_once ROOT . '/animals.model.php';

    $success = addAnimal($pdo, $animalsName, $species_id, $birthday, $is_vaccinated);
    if ($success) {
        $flashMessage = 'Lanimal a bien été ajouté';
    } else {
        $flashMessage = 'erreur';
    }

}

require_once ROOT . '/view/animals/add.view.php';