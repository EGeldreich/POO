<?php

class Film {

    private string $titre;
    private Realisateur $realisateur;
    private DateTime $sortie;
    private int $duree;
    private Genre $genre;
    private string $synopsis;

    public function __construct(string $titre, Realisateur $realisateur, string $sortie, int $duree, Genre $genre, string $synopsis) {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->sortie = new DateTime($sortie);
        $this->duree = $duree;
        // $this->genre = $genre;
        $this->synopsis = $synopsis;
        // $this->realisateur->addFilm($this);
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

    //----------------
    public function __toString(){
        return $this->titre. " (" .$this->sortie->format("Y"). ")";
    }
}