<?php
define('ROOT', dirname(__DIR__));

require_once ROOT . '/model/author.model.php';
$authors = findAll(($pdo));

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les auteurs | Admin Citations</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Citations admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="quotes.php">Les citations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="authors.php">Les auteurs</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Les utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Mon profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php" target="_blank" title="le site"><i
                                class="bi bi-eye"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exit.php" title="Se déconnecter"><i
                                class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="title mb-4">
            Les auteurs
        </h1>
        <div class="ajouter mb-3">
            <a href="author.php" class="btn btn-primary">Ajouter un auteur</a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
            <?php foreach ($authors as $card): ?>
                <div class="col">
                    <div class="card h-100">
                        <?php

                        if (is_null($card['image_src'])) {
                            $card['image_src'] = '../public/img/nobody.jpg';
                        }
                        ?>

                        <img src="<?= $card['image_src'] ?>" class="card-img-top  object-fit-cover" style="height: 400px;"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= strip_tags($card['name']) ?></h5>
                            <p class="card-text"><?= substr(strip_tags($card['biography']), 0, 100) ?> ...etc</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="auteur_edit.php?id=<?= $card['id'] ?>" class="btn btn-primary btn-sm"><i
                                    class="bi bi-pencil"></i>
                                Modifier</a>
                            <a href="auteur_delete.php?id=<?= $card['id'] ?>" class="btn btn-danger btn-sm"><i
                                    class="bi bi-trash"></i>
                                Supprimer</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>

</html>