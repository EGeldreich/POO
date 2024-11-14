<?php

class Compte {

    // Attributs
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    // Constructeur
    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    // Getters et Setters
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle($libelle): string
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSolde($solde): float
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise($devise): string
    {
        $this->devise = $devise;

        return $this;
    }
 
    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire): Titulaire
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    //Facilitateurs
    public function debiter(float $montant,){
        if ($this->solde >= $montant) {
            $result = "$this a été débiter de $montant " .$this->devise."<br>"; 
            $this->solde -= $montant;
            $result .= "Nouveau montant = " .$this->solde. " " .$this->devise. "<br><br>"; 
            return $result;
        } else {
            return "Solde insuffisant sur $this pour retirer $montant " .$this->devise. "<br><br>";
        }
        
    }
    public function crediter(float $montant,){
        $result = "$this a été créditer de $montant " .$this->devise."<br>"; 
        $this->solde += $montant;
        $result .= "Nouveau montant = " .$this->solde. " " .$this->devise. "<br><br>"; 
        return $result;
    }

    public function virer(int $montant, Compte $compte){
        if($this->solde >= $montant){
            $result = "$montant " .$this->devise. " viré de $this à $compte.<br>";
            $this->solde -= $montant;
            $compte->solde += $montant;
            $result .= "Nouvelle balance :<br>$this<br>$compte.<br>";
            return $result;
        } else {
            return "Solde insuffisant sur $this pour effecter ce virement.";
        }
    }

    public function afficherDetails() {
        return "$this -- " .$this->titulaire;
    }

    public function __toString(){
        return $this->libelle. " (" .$this->solde. " " .$this->devise. ")";
    }
}