<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Repository/SalleRepository.php';

$repository = new SalleRepository();
$salles = $repository->findAll();
?><!doctype html>
<html lang="fr">
<head><meta charset="utf-8"><title>M2L - Salles</title></head>
<body>
<h1>Salles disponibles</h1>
<p><a href="index.php">Retour</a></p>
<ul>
    <?php foreach ($salles as $salle): ?>
        <li><?= $salle->getNom() ?> — capacité : <?= $salle->getCapacite() ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>