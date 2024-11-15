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

    public function getCastings(): array{
        return $this->castings;
    }
    public function setCastings(array $castings){
        $this->castings = $castings;
        return $this;
    }
    public function getSynopsis():string{
        return $this->synopsis;
    }
    public function setSynopsis(string $synopsis){
        $this->synopsis = $synopsis;
        return $this;
    }
    public function getGenre():Genre{
        return $this->genre;
    }
    public function setGenre(Genre $genre){
        $this->genre = $genre;
        return $this;
    }
    public function getDuree():int{
        return $this->duree;
    } 
    public function setDuree(int $duree){
        $this->duree = $duree;
        return $this;
    }
    public function getSortie(): DateTime{
        return $this->sortie;
    }
    public function setSortie(string $sortie){
        $this->sortie = $sortie;
        return $this;
    }
    public function getRealisateur():string{
        return $this->realisateur;
    }
    public function setRealisateur(string $realisateur){
        $this->realisateur = $realisateur;
        return $this;
    }
    public function getTitre():string{
        return $this->titre;
    }
    public function setTitre(string $titre){ 
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
                $result .= "<li>" .$casting->getActeur(). " - " .$casting->getRole(). "</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->titre.
        " ( ".
        $this->sortie->format("Y").
        " - ".
        date("G:i", mktime(0,$this->duree)).
        " )";
    }

    // public function __toString(){
    //     return $this->titre.
    //     " ( ".
    //     $this->sortie->format("Y").
    //     " - ".
    //     sprintf("%d:%02d", floor($this->duree/60), $this->duree%60).
    //     " )";
    // }
}