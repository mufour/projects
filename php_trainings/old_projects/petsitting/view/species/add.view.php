<?php require_once dirname(__DIR__) . '/header.php'; ?>
<h1>Ajouter une espèce</h1>
<?php if (isset($flashMessage)): ?>
<?php endif ?>

<form action="species_add.php" method="post">
    <div>
        <label for="species">Nom de lespèce : </label>
        <input type="text" name="species" id="species" required>
    </div>
    <button type="submit">Ajouter</button>
</form>
<?php require_once dirname(__DIR__) . '/footer.php'; ?>