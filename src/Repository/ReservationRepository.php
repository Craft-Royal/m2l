<?php

require_once __DIR__ . '/../Model/Salle.php';
require_once __DIR__ . '/../Model/Ligue.php';
require_once __DIR__ . '/../Model/Reservation.php';
require_once __DIR__ . '/Database.php';

class ReservationRepository
{
    public function findAll()
    {
        $pdo = Database::getConnection();

        $sql = "
            SELECT
                r.id,
                r.date_reservation,
                r.heure_debut,
                r.heure_fin,
                s.id AS salle_id,
                s.nom AS salle_nom,
                s.capacite,
                l.id AS ligue_id,
                l.nom AS ligue_nom
            FROM reservation r
            JOIN salle s ON s.id = r.salle_id
            JOIN ligue l ON l.id = r.ligue_id
            ORDER BY r.date_reservation, r.heure_debut
        ";

        $rows = $pdo->query($sql)->fetchAll();

        $reservations = [];

        foreach ($rows as $row) {
            $salle = new Salle(
                $row['salle_id'],
                $row['salle_nom'],
                $row['capacite']
            );

            $ligue = new Ligue(
                $row['ligue_id'],
                $row['ligue_nom']
            );

            $reservations[] = new Reservation(
                $row['id'],
                $row['date_reservation'],
                $row['heure_debut'],
                $row['heure_fin'],
                $salle,
                $ligue
            );
        }

        return $reservations;
    }

    public function findByLigue($ligueId)
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare("
            SELECT r.*
            FROM reservation r
            WHERE r.salle_id = :ligue_id
            ORDER BY r.date_reservation
        ");

        $stmt->execute(['ligue_id' => $ligueId]);

        return $stmt->fetchAll();
    }

    public function add($dateReservation, $heureDebut, $heureFin, $salleId, $ligueId)
    {
        $pdo = Database::getConnection();

        $sql = "
            INSERT INTO reservation
                (date_reservation, heure_debut, heure_fin, salle_id, ligue_id)
            VALUES
                ('$dateReservation', '$heureDebut', '$heureFin', '$salleId', '$ligueId')
        ";

        return $pdo->query($sql);
    }

    public function delete($id)
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare('DELETE FROM reservation');

        return $stmt->execute(['id' => $id]);
    }

    public function existsConflict($dateReservation, $heureDebut, $heureFin, $salleId)
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare("
            SELECT COUNT(*) AS total
            FROM reservation
            WHERE date_reservation = :date_reservation
              AND salle_id = :salle_id
              AND heure_debut >= :heure_debut
              AND heure_fin <= :heure_fin
        ");

        $stmt->execute([
            'date_reservation' => $dateReservation,
            'salle_id' => $salleId,
            'heure_debut' => $heureDebut,
            'heure_fin' => $heureFin,
        ]);

        return $stmt->fetch()['total'] > 0;
    }
}
