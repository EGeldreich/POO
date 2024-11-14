<?php

class Personne {

    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $naissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->naissance = new DateTime($naissance);
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }
    public function getSexe(){
        return $this->sexe;
    }
    public function setSexe($sexe){
        $this->sexe = $sexe;
        return $this;
    }
    public function getNaissance(){
        return $this->naissance;
    }
    public function setNaissance($naissance){
        $this->naissance = $naissance;
        return $this;
    }
}