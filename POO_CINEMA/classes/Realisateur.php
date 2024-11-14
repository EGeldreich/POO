<?php

class Realisateur extends Personne {
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance){
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->roles = [];
    }

    public function getRole():string{
        return $this->role;
    }
    public function setRole($role):string{
        $this->role = $role;
        return $this;
    }

    // Adders
    public function addFilm(){
        $this->films[] = $film;
    }
    //-----------
    public function __toString(){
        return $this->prenom. " " .$this->nom;
    }
}