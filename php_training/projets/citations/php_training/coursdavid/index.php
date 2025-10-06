<?php

require_once "tools.php";

// http://localhost/coursdavid/index.php?firstname=<script>alert('virus')</script>

// echo $_GET['firstname'];

// pre_print_r($_GET)

// echo htmlspecialschars(string: $html); // transorme les chevrons
// echo strip_tags(string: $html); // protege aussi des intrusions via l'url

// echo htmlspecialchars(string: $_GET['firstname']);

// echo $_GET['age'];

if(isset($_GET['lol'])){
    echo htmlspecialchars(string: $_GET['lol']);
} else {
    die('Une erreur a été rencontrée');
}

if(isset($_GET['age'])){
    var_dump(value: $_GET['age']);
    echo intval(value: $_GET['age']);
} else {
    die('Une erreur a été rencontrée');
}