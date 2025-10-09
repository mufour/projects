<?php
$author = $params['author'];
$title = "Les auteurs";
$pageTitle = "Afficher un auteur";
$module = "authors";
ob_start();
?>

<div class="g-4 my-4">
    <h2><?= strip_tags($author) ?></h2>
    <br>
    <?=$params['author']->getBiography() ?>
    <br>
    <a href="/authors" class="btn btn-secondary ms-3">
        <i class="bi bi-arrow-left"></i> Retour
    </a>
</div>

<?php $content = ob_get_clean(); ?>
<?php require_once ROOT_PATH . '/view/template/default.php'; ?>