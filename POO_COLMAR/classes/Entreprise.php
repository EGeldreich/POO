<?php

class Entreprise {
    // attributs
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $contrats;

    // constructor
    public function __construct (string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville,) {
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->contrats = [];
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
    public function getContrats()
    {
        return $this->contrats;
    }
    public function setContrats($contrats)
    {
        $this->contrats = $contrats;
        return $this;
    }

    // Useful
    public function getAdresseComplete (): string
    {
        return $this->adresse.", ".$this->codePostal." ".$this->ville;
    }

    public function getInfos() {
        return $this." a été créé le ".$this->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante : ".$this->getAdresseComplete();
    }

    public function addContrat(Contrat $contrat){
        $this->contrats[] = $contrat;
    }

    public function afficherEmployes() {
        $result = "<h2>Employés de $this</h2><ul>";

        foreach($this->contrats as $contrat){
            $result .= "<li>".$contrat->getEmploye()." (".$contrat->getDateEmbauche()->format("d-m-Y").")</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    
    public function __toString() {
        return $this->raisonSociale;
    }
    
}