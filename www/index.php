<?php

declare(strict_types=1);

$route = $_GET['route'] ?? 'reservations';

switch ($route) {
    case 'reservations':
        require_once __DIR__ . '/../controle/ReservationRepository.php';
        $repository = new ReservationRepository();
        $reservations = $repository->findAll();

        require_once __DIR__ . '/../page/enregistrer-reservation.php';
        break;

    case 'supprimer-reservation':
        require_once __DIR__ . '/../controle/ReservationRepository.php';
        $repository = new ReservationRepository();

        $id = (int) $_GET['id'];
        $repository->delete($id);

        header('Location: index.php?route=reservations');
        exit;

    case 'nouvelle-reservation':
        require_once __DIR__ . '/../controle/SalleRepository.php';
        require_once __DIR__ . '/../controle/LigueRepository.php';

        $salles = (new SalleRepository())->findAll();
        $ligues = (new LigueRepository())->findAll();

        require_once __DIR__ . '/../page/nouvelle-reservation.php';
        break;

    case 'enregistrer-reservation':
        require_once __DIR__ . '/../controle/ReservationRepository.php';
        $repository = new ReservationRepository();

        $date = $_POST['date'];
        $heureDebut = $_POST['heure_debut'];
        $heureFin = $_POST['heure_fin'];
        $salleId = (int) $_POST['salle_id'];
        $ligueId = (int) $_POST['ligue_id'];

        if ($repository->existsConflict($date, $heureDebut, $heureFin, $salleId)) {
            die('Cette salle est déjà réservée sur ce créneau.');
        }

        $repository->add($date, $heureDebut, $heureFin, $salleId, $ligueId);

        header('Location: index.php?route=reservations');
        exit;

    case 'salles':
        require_once __DIR__ . '/../controle/SalleRepository.php';
        $repository = new SalleRepository();
        $salles = $repository->findAll();

        require_once __DIR__ . '/../page/salles.php';
        break;

    case 'recherche':
        require_once __DIR__ . '/../controle/LigueRepository.php';
        require_once __DIR__ . '/../controle/ReservationRepository.php';

        $ligues = (new LigueRepository())->findAll();
        $repository = new ReservationRepository();
        $resultats = [];

        if (isset($_GET['ligue_id'])) {
            $resultats = $repository->findByLigue((int) $_GET['ligue_id']);
        }

        require_once __DIR__ . '/../page/recherche.php';
        break;

    default:
        http_response_code(404);
        require_once __DIR__ . '/../template/header.php';
        echo "<h2>404 - Page non trouvée</h2>";
        require_once __DIR__ . '/../template/footer.php';
        break;
}