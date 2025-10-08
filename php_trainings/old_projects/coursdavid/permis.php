<?php

// cette partie s'appelle la logique, ou plutôt controller
if(!isset($_GET['age'])){
    die('en attente de l\'age');
}

$age = intval(value: $_GET['age']);
// var_dump(value: $age);

$msg = '';

if($age >= 18){
    $msg = 'tu peux avoir le permis';
} elseif ($age >= 16){
    $msg = 'tu peux passer la conduite accompagné';
} else {
    $msg  = 'prends ton velo';
}
?>


<!-- cette partie s'appelle la vue --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peux-tu conduire ?</title>
</head>
<body>
    Tu as <?= htmlspecialchars(string: $_GET['age']) ?> an<?= $age > 1 ? 's' : '' ?> : <?= $msg ?>
</body>
</html>