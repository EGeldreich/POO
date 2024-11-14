<?php

class Acteur extends Personne {
    private array $roles;
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance, string $role){
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->roles = [];
        $this->films = [];
    }

    public function getRole():string{
        return $this->role;
    }
    public function setRole($role):string{
        $this->role = $role;
        return $this;
    }

    // Adders
    public function addRole(){
        $this->roles[] = $role;
    }
    public function addFilm(){
        $this->films[] = $film;
    }
    //-----------
    public function __toString(){
        return $this->prenom. " " .$this->nom;
    }
}