<?php

class Ligue
{
    public $id;
    public $nom;

    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }
}
