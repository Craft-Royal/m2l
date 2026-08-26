<?php

require_once __DIR__ . '/../src/Repository/SalleRepository.php';
require_once __DIR__ . '/../src/Repository/LigueRepository.php';

$salleRepository = new SalleRepository();
$ligueRepository = new LigueRepository();

$salles = $salleRepository->findAll();
$ligues = $ligueRepository->findAll();

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nouvelle réservation</title>
</head>
<body>

<h1>Nouvelle réservation</h1>

<p><a href="index.php">Retour</a></p>

<form method="post" action="enregistrer-reservation.php">

    <label>Date :</label>
    <input type="date" name="date">
    <br><br>

    <label>Heure de début :</label>
    <input type="time" name="heure_debut">
    <br><br>

    <label>Heure de fin :</label>
    <input type="time" name="heure_fin">
    <br><br>

    <label>Salle :</label>
    <select name="salle_id">
        <?php foreach ($salles as $salle): ?>
            <option value="<?= $salle->id ?>">
                <?= $salle->getNom() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <label>Ligue :</label>
    <select name="ligue_id">
        <?php foreach ($ligues as $ligue): ?>
            <option value="<?= $ligue->id ?>">
                <?= $ligue->getNom() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit">Réserver</button>

</form>

</body>
</html>
