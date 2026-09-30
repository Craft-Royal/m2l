<?php

declare(strict_types=1);

class Salle
{
    public int $id;
    public string $nom;
    public int $capacite;

    public function __construct(int $id, string $nom, int $capacite)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->capacite = $capacite;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getCapacite(): int
    {
        return $this->capacite;
    }
}