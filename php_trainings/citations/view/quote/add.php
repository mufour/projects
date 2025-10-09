<?php
$title = "Ajouter une citation";
$pageTitle = "Ajouter une citation";
$module = "quotes";
$authors = $params;
ob_start();
?>

<form action="/quotes/add" method="post">
    <div class="mb-5">
        <label for="quote" class="form-label">La citation</label>
        <input type="text" class="form-control" id="quote" name="quote" required>
    </div>
    <div class="mb-3">
        <label for="explanation" class="form-label">Explication</label>
        <textarea class="form-control" id="explanation" name="explanation"></textarea>
    </div>
    <div class="mb-3">
        <label for="author_id" class="form-label">Auteur</label>
        <select class="form-control" name="author_id" id="author_id">
            <option value="0" selected></option>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author->getId() ?>"><?= $author->getAuthor() ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php
$content = ob_get_clean();
require_once ROOT_PATH . '/view/template/default.php';
