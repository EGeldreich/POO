<?php

class Realisateur extends Personne {
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance){
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->films = [];
    }
    public function getFilms(): Film{
        return $this->castings;
    }
    public function setFilms(Film $films){
        $this->films = $films;
        return $this;
    }

    // Adders
    public function addFilm(Film $film){
        $this->films[] = $film;
    }
    //-----------
    public function listeFilms(){
        $result = "<strong>$this</strong> a réalisé :<ul>";
        foreach($this->films as $film){
                $result .= "<li>$film</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    public function __toString(){
        return $this->prenom. " " .$this->nom;
    }
}