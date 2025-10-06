<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ROOT . '/animals.model.php';
require_once ROOT . '/utils.php';

$animals = findAllAnimals($pdo);
require_once ROOT . '/view/animals/list.view.php';
?>
