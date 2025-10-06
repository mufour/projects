<?php
/**
 * Traitement du formulaire de contact
 */

require_once __DIR__ . '/tools.php';

// pre_print_r(array: $_SERVER);

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // le formulaire a été envoyé
    // pre_print_r(($_POST));

    if (
        isset( // on vérifie l'existence de tous les champs
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['message']
    )
    ) {
        if (
            !empty($_POST['firstname'])
            && !empty($_POST['lastname'])
            && !empty($_POST['email'])
        ) {
            $firstname = htmlspecialchars(string: $_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $message = nl2br(trim(strip_tags($_POST['email'])));

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email'];
                // envoie de l'email
                $content = 'prenom : ' . $firstname .'<br>';
                $content .= 'nom : ' . $lastname .'<br>';
                $content .= 'email : ' . $email .'<br>';

                $flash = 'Nous avons bien reçu votre message, merci !';

            } else {
                $flash = 'l\'email n\'est pas valide';
            }
        } else {
            // un champ vide, on envoie un flash
            $flash = "Merci de compléter tous les champs";
        }
    }
}

?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.pumpkin.min.css">
</head>

<body>
    <?php if (isset($flash)): ?>
        <div class="msg">
            <?php echo $flash; ?>
        </div>
    <?php endif ?>
    <div class="container">

        <?php if (isset($content)): ?>
            <div class="msg">
                <?= $content; ?>
            </div>
        <?php endif ?>
        <h1>Nous contacter</h1>

        <form action="contact.php" method="post">
            <fieldset>
                <label for="firstname">Prénom
                    <input type="text" name="firstname" id="firstname">
                </label>
                <label for="lastname">Nom
                    <input type="text" name="lastname" id="lastname">
                </label>
                <label for="email">Email
                    <input type="text" name="email" id="email">
                </label>
                <label for="message">Votre message
                    <textarea name="message" id="message"></textarea>
                </label>

                <button type="submit">Envoyer</button>
            </fieldset>
        </form>
    </div>
</body>

</html>