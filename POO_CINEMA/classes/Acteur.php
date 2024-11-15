<?php

class Acteur extends Personne {
    private array $castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance){
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->castings = [];
    }

    public function getCastings(): array{
        return $this->castings;
    }
    public function setCastings(array $castings){
        $this->castings = $castings;
        return $this;
    }

    // Adders
    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }
    //-----------
    public function listeFilms(){
        $result = "<strong>$this</strong> a joué dans :<ul>";
        foreach($this->castings as $casting){
                $result .= "<li>" .$casting->getFilm(). " - " .$casting->getRole(). "</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->prenom. " " .$this->nom;
    }

}