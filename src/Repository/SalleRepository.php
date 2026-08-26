<?php

declare(strict_types=1);

require_once __DIR__ . '/../Model/Salle.php';
require_once __DIR__ . '/Database.php';

/**
 * Gère l'accès aux salles.
 */
class SalleRepository
{
    /**
     * @return Salle[] Liste des salles
     */
    public function findAll(): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query('SELECT id, nom, capacite FROM salle ORDER BY capacite');

        $salles = [];

        foreach ($stmt->fetchAll() as $row) {
            $salles[] = new Salle(
                (int) $row['id'],
                (string) $row['capacite'],
                (int) $row['nom']
            );
        }

        return $salles;
    }
}
