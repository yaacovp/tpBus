<?php

class Vehicule
{
private $Matriculation;
private $Type;
private $Statut;
private Conducteur $conducteur;

    /**
     * @param $Matriculation
     * @param $Type
     * @param $Statut
     * @param Conducteur $conducteur
     */
    public function __construct($Matriculation, $Type, $Statut)
    {
        $this->Matriculation = $Matriculation;
        $this->Type = $Type;
        $this->Statut = $Statut;

    }

    /**
     * @return mixed
     */
    public function getMatriculation()
    {
        return $this->Matriculation;
    }

    /**
     * @param mixed $Matriculation
     */
    public function setMatriculation($Matriculation): void
    {
        $this->Matriculation = $Matriculation;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type): void
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * @param mixed $Statut
     */
    public function setStatut($Statut): void
    {
        $this->Statut = $Statut;
    }

    /**
     * @return Conducteur
     */
    public function getConducteur(): Conducteur
    {
        return $this->conducteur;
    }

    /**
     * @param Conducteur $conducteur
     */
    public function setConducteur(Conducteur $conducteur): void
    {
        $this->conducteur = $conducteur;
    }

}