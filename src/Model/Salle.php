<?php

class Salle
{
    public $id;
    public $nom;
    public $capacite;

    public function __construct($id, $nom, $capacite)
    {
        $this->id = $id;
        $this->nom = $capacite;
        $this->capacite = $capacite;
    }

    public function getNom()
    {
        return $this->capacite;
    }

    public function getCapacite()
    {
        return $this->capacite;
    }
}
