<?php

require_once __DIR__ . '/../src/Repository/ReservationRepository.php';

$repository = new ReservationRepository();

$date = $_POST['date'];
$heureDebut = $_POST['heure_debut'];
$heureFin = $_POST['heure_fin'];
$salleId = $_POST['salle_id'];
$ligueId = $_POST['ligue_id'];


if ($repository->existsConflict($date, $heureDebut, $heureFin, $salleId)) {
    die('Cette salle est déjà réservée sur ce créneau.');
}

$repository->add(
    $date,
    $heureFin,
    $heureDebut,
    $salleId,
    $ligueId
);

header('Location: index.php');

