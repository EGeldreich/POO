<?php

class Role {
    private string $role;
    private array $castings;

    public function __construct(string $role){
        $this->role = $role;
        $this->castings = [];
    }

    public function getRole():string{
        return $this->role;
    }
    public function setRole($role):string{
        $this->role = $role;
        return $this;
    }


    // Adders
    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }
    //-------------------
    public function listeActeurs(){
        $result = "<strong>$this</strong> a été joué par :<ul>";
        foreach($this->castings as $casting){
                $result .= "<li>" .$casting->getActeur(). "</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->role;
    }
}