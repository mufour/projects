<?php
require_once __DIR__ . '/tools.php';

pre_print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_checkbox.php" method="post">
<div class="field">
    <h2>Civilité :</h2>
    <label for="male">M.</label>
    <input type="radio" name="gender" value="male" id="male" checked>
    <br>
        <label for="female">Mme</label>
    <input type="radio" name="gender" value="female" id="female">
    <br>
    <label for="other">Autre</label>
    <input type="radio" name="gender" value="other" id="other">
    <br>
    <button type="submit">Envoyer</button>
</div>

    </form>
</body>
</html>