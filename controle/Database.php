<?php

declare(strict_types=1);

require_once __DIR__ . '/Ligue.php';
require_once __DIR__ . '/Database.php';

class LigueRepository
{
    public function findAll(): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query('SELECT id, nom FROM ligue ORDER BY nom');

        $ligues = [];
        foreach ($stmt->fetchAll() as $row) {
            $ligues[] = new Ligue((int) $row['id'], (string) $row['nom']);
        }

        return $ligues;
    }
}