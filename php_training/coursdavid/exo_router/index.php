<?php

// on fait de la config
//
//
//

//on route
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'accueil';
        case 'contact';
        case 'blog';
        $page = $_GET['page'];
        break;
        default:
        $page = '404';
        break;
    }
} else {
    $page = 'accueil';
}

require_once 'pages/' . $page . '.php';