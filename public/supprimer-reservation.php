<?php

require_once __DIR__ . '/../src/Repository/ReservationRepository.php';

$repository = new ReservationRepository();

$id = $_GET['id'];

$repository->delete($id);

header('Location: index.php');
exit;
