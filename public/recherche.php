<?php

require_once __DIR__ . '/../src/Repository/LigueRepository.php';
require_once __DIR__ . '/../src/Repository/ReservationRepository.php';

$ligueRepository = new LigueRepository();
$reservationRepository = new ReservationRepository();

$ligues = $ligueRepository->findAll();
$resultats = [];

if (isset($_GET['ligue_id'])) {
    $resultats = $reservationRepository->findByLigue($_GET['ligue_id']);
}

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Recherche</title>
</head>
<body>

<h1>Recherche des réservations</h1>

<p><a href="index.php">Retour</a></p>

<form method="get">

    <label>Ligue :</label>

    <select name="ligue_id">
        <?php foreach ($ligues as $ligue): ?>
            <option value="<?= $ligue->id ?>">
                <?= $ligue->getNom() ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Rechercher</button>
</form>

<?php if (isset($_GET['ligue_id'])): ?>

    <h2>Résultat</h2>

    <?php if (count($resultats) === 0): ?>
        <p>Aucune réservation trouvée.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($resultats as $reservation): ?>
                <li>
                    <?= $reservation['date_reservation'] ?>
                    :
                    <?= $reservation['heure_debut'] ?>
                    -
                    <?= $reservation['heure_fin'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>
