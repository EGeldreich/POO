<?php

class Genre {
    private string $genre;
    private array $films;

    public function __construct(string $genre){
        $this->genre = $genre;
        $this->films = [];
    }

    public function getGenre():string{
        return $this->genre;
    }
    public function setGenre($genre):string{
        $this->genre = $genre;
        return $this;
    }
    
    // Adders
    public function addFilm(Film $film){
        $this->films[] = $film;
    }
    // --------------------
    public function listeFilms(){
        $result = "Liste des films du genre <strong>$this</strong> :<ul>";
        foreach($this->films as $film){
                $result .= "<li>" .$film->getTitre(). "</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    public function __toString(){
        return $this->genre;
    }
}