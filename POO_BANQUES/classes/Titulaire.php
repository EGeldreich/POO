<?php

class Titulaire {

    // Attributs
    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;
    private array $comptes;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $date, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;
        $this->comptes = [];
    }

    // Getters et Setters
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom): string
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): string
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate($date): string
    {
        $this->date = $date;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille($ville): string
    {
        $this->ville = $ville;

        return $this;
    }

    // Adders
    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }

    // Facilitateurs
    public function titulaireInfos(){
        $tz = new DateTimeZone('Europe/Paris');
        $age = $this->date->diff(new DateTime('now', $tz))->y. " ans";
        $result = "$age, " .$this->ville;
        return $result;
    }
    public function afficherDetails(){
        $result = "<p><strong>Comptes de $this</strong> (" .$this->titulaireInfos(). ")</p><ul>";
        foreach($this->comptes as $compte){
            $result .= "<li>" .$compte. "</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->prenom. " " .$this->nom;
    }
}