<?php require_once __DIR__ . '/../template/header.php'; ?>

    <h2>Salles disponibles</h2>

    <ul>
        <?php foreach ($salles as $salle): ?>
            <li><?= $salle->getNom() ?> — capacité : <?= $salle->getCapacite() ?></li>
        <?php endforeach; ?>
    </ul>

<?php require_once __DIR__ . '/../template/footer.php'; ?>