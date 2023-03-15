<?php

class Conducteur
{
private $Nom;
private $Prenom;

    /**
     * @param $Nom
     * @param $Prenom
     */
    public function __construct($Nom, $Prenom)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom): void
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom): void
    {
        $this->Prenom = $Prenom;
    }

}