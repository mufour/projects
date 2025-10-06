        <?php require_once dirname(__DIR__) . '../header.php'?>
        <h1>Liste des Espèces</h1>
        <div class="especes">
            <?php foreach ($species as $item): ?>
               <div class="espece">
                <?= $item['species'] ?>
               </div>

            <?php endforeach; ?>
        </div>
        <?php require_once dirname(__DIR__) . '../footer.php'?>       