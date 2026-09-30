<?php

declare(strict_types=1);

require_once __DIR__ . '/../controle/ReservationRepository.php';

$repository = new ReservationRepository();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];
    $repository->delete($id);
}

// Redirection vers la liste des réservations
header('Location: index.php?route=reservations');
exit;