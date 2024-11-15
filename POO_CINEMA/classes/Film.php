<?php

class Film {

    private string $titre;
    private Realisateur $realisateur;
    private DateTime $sortie;
    private int $duree;
    private Genre $genre;
    private string $synopsis;
    private array $castings;

    public function __construct(string $titre, Realisateur $realisateur, string $sortie, int $duree, Genre $genre, string $synopsis) {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->sortie = new DateTime($sortie);
        $this->duree = $duree;
        $this->genre = $genre;
        $this->synopsis = $synopsis;
        $this->castings = [];

        $this->realisateur->addFilm($this);
        $this->genre->addFilm($this);
    }
    public function getRoles():string{
        return $this->roles;
    }
    public function setRoles($roles):string{
        $this->roles = $roles;
        return $this;
    }
    public function getActeurs(){
        return $this->acteurs;
    }
    public function setActeurs($acteurs){
        $this->acteurs = $acteurs;
        return $this;
    }
    public function getSynopsis():string{
        return $this->synopsis;
    }
    public function setSynopsis($synopsis):string{
        $this->synopsis = $synopsis;
        return $this;
    }
    public function getGenre():Genre{
        return $this->genre;
    }
    public function setGenre($genre):Genre{
        $this->genre = $genre;
        return $this;
    }
    public function getDuree():int{
        return $this->duree;
    } 
    public function setDuree($duree):int{
        $this->duree = $duree;
        return $this;
    }
    public function getSortie():int{
        return $this->sortie;
    }
    public function setSortie($sortie):string{
        $this->sortie = $sortie;
        return $this;
    }
    public function getRealisateur():string{
        return $this->realisateur;
    }
    public function setRealisateur($realisateur):string{
        $this->realisateur = $realisateur;
        return $this;
    }
    public function getTitre():string{
        return $this->titre;
    }
    public function setTitre($titre):string{ 
        $this->titre = $titre;
        return $this;
    }

    // Adders
    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }
    //----------------
    public function listeActeurs(){
        $result = "Liste des acteurs ayant joués dans <strong>$this</strong> :<ul>";
        foreach($this->castings as $casting){
                $result .= "<li>" .$casting->getActeur(). "</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->titre. " (" .$this->sortie->format("Y"). ")";
    }
}