<?php

define('ROOT', dirname(__DIR__));

require_once ROOT . '/view/header.php';

if (isset($_GET['module'])) {
    switch ($_GET['module']) {
        case 'species';
        case 'animals';
            $controller = $_GET['module'];
            break;
        default:
            $controller = '404';
            break;
    }
} else {
    $controller = 'species';
}

require_once ROOT . '/controller/' . $controller . '.php';

require_once ROOT . '/view/footer.php';