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

    public function getNom():string{
        return $this->nom;
    }
    public function setNom($nom):string{
        $this->nom = $nom;
        return $this;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function setPrenom($prenom):string{
        $this->prenom = $prenom;
        return $this;
    }
    public function getSexe():string{
        return $this->sexe;
    }
    public function setSexe($sexe):string{
        $this->sexe = $sexe;
        return $this;
    }
    public function getNaissance():string{
        return $this->naissance;
    }
    public function setNaissance($naissance):string{
        $this->naissance = $naissance;
        return $this;
    }
}