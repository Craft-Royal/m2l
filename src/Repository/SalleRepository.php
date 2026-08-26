<?php

require_once __DIR__ . '/../Model/Salle.php';
require_once __DIR__ . '/Database.php';

class SalleRepository
{
    public function findAll()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query('SELECT id, nom, capacite FROM salle ORDER BY capacite');

        $salles = [];

        foreach ($stmt->fetchAll() as $row) {
            $salles[] = new Salle(
                $row['id'],
                $row['capacite'],
                $row['nom']
            );
        }

        return $salles;
    }
}
