<?php

class Livre {

    // Attributs
    private string $titre;
    private int $pages;
    private DateTime $parution;
    private float $prix;
    private Auteur $auteur;

    // Constructeur
    public function __construct(string $titre, int $pages, string $parution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->pages = $pages;
        $this->parution = new DateTime($parution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }

    // Getters et Setters
    public function getAuteur(): Auteur
    {
    return $this->auteur;
    }

    public function setAuteur($auteur): Auteur
    {
    $this->auteurs = $auteur;

    return $this;
    }

    public function getPrix(): float
    {
    return $this->prix;
    }

    public function setPrix($prix): float
    {
    $this->prix = $prix;

    return $this;
    }

    public function getParution(): DateTime
    {
    return $this->parution;
    }

    public function setParution($parution): DateTime
    {
    $this->parution = $parution;

    return $this;
    }
    
    public function getPages(): int
    {
    return $this->pages;
    }

    public function setPages($pages): int
    {
    $this->pages = $pages;

    return $this;
    }

    public function getTitre(): string
    {
    return $this->titre;
    }

    public function setTitre($titre): string
    {
    $this->titre = $titre;

    return $this;
    }

    

    // Facilitateurs

    public function __toString(){
        return $this->titre;
    }
}