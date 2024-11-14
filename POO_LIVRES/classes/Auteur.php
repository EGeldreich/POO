<?php

class Auteur {

    // Attributs
    private string $prenom;
    private string $nom;
    private array $livres;

    // Constructeur
    public function __construct(string $prenom, string $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = [];
    }

    // Getters et Setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    // Adders
    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }
    


    // Facilitateurs
    public function afficherBibliographie(){
        $result = "<h2> Livres de $this</h2><ul>";
        foreach($this->livres as $livre){
            $result .=
            "<li><strong>" .$livre. "</strong> ("
            .$livre->getParution()->format("Y")
            .") : "
            .$livre->getPages()
            ." pages / "
            .$livre->getPrix()
            ." €</li>"; 
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->prenom. " " .$this->nom;
    }
}
