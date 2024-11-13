<?php

class Employe {
    // attributes
    private string $nom;
    private string $prenom;
    private string $email;
    private Entreprise $entreprise;

    //constructor
    public function __construct (string $nom, string $prenom, string $email, Entreprise $entreprise) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->entreprise = $entreprise;
        $this->entreprise->addEmploye($this);
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
    public function getEntreprise(): Entreprise
    {
        return $this->entreprise;
    }
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    // Useful
    public function getInfos() {
        return $this." travaille dans l'entreprise ".$this->entreprise;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
    
}