<?php

class Organisation
{
private $Nom;
private $Ville;
private array $garages;

    /**
     * @param $Nom
     * @param $Ville
     * @param array $garages
     */
    public function __construct($Nom, $Ville)
    {
        $this->Nom = $Nom;
        $this->Ville = $Ville;
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
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param mixed $Ville
     */
    public function setVille($Ville): void
    {
        $this->Ville = $Ville;
    }

    /**
     * @return array
     */
    public function getGarages(): array
    {
        return $this->garages;
    }

    /**
     * @param array $garages
     */
    public function setGarages(array $garages): void
    {
        $this->garages = $garages;
    }

}