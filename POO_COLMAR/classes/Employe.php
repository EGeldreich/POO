<?php

class Employe {
    // attributes
    private string $nom;
    private string $prenom;
    private string $email;
    private array $contrats;

    //constructor
    public function __construct (string $nom, string $prenom, string $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->contrats = [];
    }

    // getters and setters
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom): string
    {
        $this->nom = $nom;

        return $this;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom): string
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): string
    {
        $this->email = $email;

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
    public function addContrat(Contrat $contrat){
        $this->contrats[] = $contrat;
    }
    public function afficherEntreprises() {
        $result = "<h2>Historique de $this</h2><ul>";

        foreach($this->contrats as $contrat){
            $result .= "<li>".$contrat->getEntreprise()." (".$contrat->getDateEmbauche()->format("d-m-Y").")</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
    
}