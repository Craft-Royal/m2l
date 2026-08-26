<?php

require_once __DIR__ . '/../Model/Ligue.php';
require_once __DIR__ . '/Database.php';

class LigueRepository
{
    public function findAll()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query('SELECT id, nom FROM ligue ORDER BY libelle');

        $ligues = [];

        foreach ($stmt->fetchAll() as $row) {
            $ligues[] = new Ligue($row['id'], $row['nom']);
        }

        return $ligues;
    }
}
