<?php

declare(strict_types=1);

class Reservation
{
    public int $id;
    public string $dateReservation;
    public string $heureDebut;
    public string $heureFin;
    public Salle $salle;
    public Ligue $ligue;

    public function __construct(
        int $id,
        string $dateReservation,
        string $heureDebut,
        string $heureFin,
        Salle $salle,
        Ligue $ligue
    ) {
        $this->id = $id;
        $this->dateReservation = $dateReservation;
        $this->heureDebut = $heureDebut; // Corrigé (l'original inversait avec heureFin)
        $this->heureFin = $heureFin;
        $this->salle = $salle;
        $this->ligue = $ligue;
    }

    public function getCreneau(): string
    {
        return $this->heureDebut . ' - ' . $this->heureFin;
    }
}