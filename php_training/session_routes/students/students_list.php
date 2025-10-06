<?php session_start(); ?>

<?php require_once dirname(__DIR__) . '/flash.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les apprenants</title>
</head>

<body>
    <?php if (isset($_SESSION['flash'])) : ?>
    <?php echo displayFlash();
    endif;
    ?>
    <a href="student_add.php">Ajouter un apprenant</a>

    <ul>
        <li>Benjamin Voydie <a href="student_delete.php?id=1">Supprimer</a></li>
        <li>Meganne Bats</li>
        <li>Khalil Echchine</li>
    </ul>

</body>

</html>