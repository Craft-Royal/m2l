<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Repository/ReservationRepository.php';

$repository = new ReservationRepository();

$id = (int) $_GET['id'];

$repository->delete($id);

header('Location: index.php');
exit;
