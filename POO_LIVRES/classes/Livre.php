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
    public function getAuteur()
    {
    return $this->auteur;
    }

    public function setAuteur($auteur)
    {
    $this->auteurs = $auteur;

    return $this;
    }

    public function getPrix()
    {
    return $this->prix;
    }

    public function setPrix($prix)
    {
    $this->prix = $prix;

    return $this;
    }

    public function getParution()
    {
    return $this->parution;
    }

    public function setParution($parution)
    {
    $this->parution = $parution;

    return $this;
    }
    
    public function getPages()
    {
    return $this->pages;
    }

    public function setPages($pages)
    {
    $this->pages = $pages;

    return $this;
    }

    public function getTitre()
    {
    return $this->titre;
    }

    public function setTitre($titre)
    {
    $this->titre = $titre;

    return $this;
    }

    

    // Facilitateurs

    public function __toString(){
        return $this->titre;
    }
}