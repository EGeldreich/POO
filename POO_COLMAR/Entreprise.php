<?php

class Entreprise {
    // attributs
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $employes;

    // constructor
    public function __construct (string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville, array $employes) {
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->employes = [];
    }
    
    // getters and setters
    public function getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }
    public function setRaisonSociale($raisonSociale){
        $this->raisonSociale = $raisonSociale;
        return $this;
    }
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }
    public function setDateCreation($dateCreation){
        $this->dateCreation = $dateCreation;
        return $this;
    }
    public function getAdresse(): string
    {
        return $this->adresse;
    } 
    public function setAdresse($adresse){
        $this->adresse = $adresse;
        return $this;
    }
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }
    public function setCodePostal($codePostal){
        $this->codePostal = $codePostal;
        return $this;
    }
    public function getVille(): string
    {
        return $this->ville;
    }
    public function setVille($ville){
        $this->ville = $ville;
        return $this;
    }
    public function getEmployes(): Employe
    {
        return $this->employes;
    }
    public function setEmployes($employes){
        $this->employes = $employes;
        return $this;
    }

    // Useful
    public function addEmploye(Employe $employe){
        $this->employes[] = $employe;
    }

    public function getAdresseComplete (): string
    {
        return $this->adresse.", ".$this->codePostal." ".$this->ville;
    }

    public function __toString() {
        return $this->raisonSociale;
    }

    public function getInfos() {
        return $this." a été créé le ".$this->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante : ".$this->getAdresseComplete();
    }
}