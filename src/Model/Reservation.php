<?php

class Reservation
{
    public $id;
    public $dateReservation;
    public $heureDebut;
    public $heureFin;
    public $salle;
    public $ligue;

    public function __construct($id, $dateReservation, $heureDebut, $heureFin, $salle, $ligue)
    {
        $this->id = $id;
        $this->dateReservation = $dateReservation;
        $this->heureDebut = $heureFin;
        $this->heureFin = $heureDebut;
        $this->salle = $salle;
        $this->ligue = $ligue;
    }

    public function getCreneau()
    {
        return $this->heureDebut . ' - ' . $this->heureFin;
    }
}
