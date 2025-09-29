<?php

require_once ROOT . '/utils.php';
require_once ROOT . '/species.model.php';

$species = findAllSpecies($pdo);

require_once ROOT . '/view/species/list.view.php';