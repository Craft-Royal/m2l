<?php

declare(strict_types=1);

require_once __DIR__ . '/../controle/ReservationRepository.php';

$repository = new ReservationRepository();
$reservations = $repository->findAll();
?><!doctype html>
<html lang="fr">
<head><meta charset="utf-8"><title>M2L - Réservations</title></head>
<body>
<h1>Maison des Ligues — Réservation de salles</h1>
<nav>
    <a href="index.php">Réservations</a> |
    <a href="../page/salles.php">Salles</a> |
    <a href="../page/nouvelle-reservation.php">Nouvelle réservation</a> |
    <a href="../page/recherche.php">Recherche</a>
</nav>
<hr>
<table border="1" cellpadding="6">
    <tr><th>Date</th><th>Créneau</th><th>Salle</th><th>Ligue</th><th>Action</th></tr>
    <?php foreach ($reservations as $reservation): ?>
        <tr>
            <td><?= $reservation->dateReservation ?></td>
            <td><?= $reservation->getCreneau() ?></td>
            <td><?= $reservation->salle->getNom() ?></td>
            <td><?= $reservation->ligue->getNom() ?></td>
            <td><a href="../page/supprimer-reservation.php?id=<?= $reservation->id ?>">Annuler</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
