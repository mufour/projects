<?php require_once dirname(__DIR__) . '/header.php'; ?>
<h1>Ajouter un animal</h1>
<?php if (isset($flashMessage)): ?>
<?php endif ?>

<form action="animals_add.php" method="post">
    <div>
        <label for="animals">Nom de lanimal : </label>
        <input type="text" name="animals" id="animals" required>
    </div>
    <div>
        <label for="species_id">Espèce :</label>
        <select name="species_id" id="species_id" required>
            <?php
            require_once ROOT . '/species.model.php';
            $speciesList = findAllSpecies($pdo);
            foreach ($speciesList as $species): ?>
                <option value="<?= $species['id'] ?>">
                    <?= htmlspecialchars($species['species']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label for="birthday">Date de naissance :</label>
        <input type="date" name="birthday" id="birthday">
    </div>

    <div>
        <label for="is_vaccinated">Vacciné ?</label>
        <select name="is_vaccinated" id="is_vaccinated">
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>
    <button type="submit">Ajouter</button>
</form>
<?php require_once dirname(__DIR__) . '/footer.php'; ?>