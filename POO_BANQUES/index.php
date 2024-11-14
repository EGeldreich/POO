<h1>POO Banques</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

$titulaire1 = new Titulaire ("Smith", "John", "1984-01-01", "New York");
$titulaire2 = new Titulaire ("Doe", "Jane", "1995-01-01", "Chicago");

$compte1 = new Compte ("Compte courant", 100.94, "EUR", $titulaire1);
$compte2 = new Compte ("Livret A", 15000, "EUR", $titulaire1);
$compte3 = new Compte ("PEA", 8452.52, "EUR", $titulaire1);
$compte4 = new Compte ("Livret A", 1300.94, "EUR", $titulaire2);
$compte5 = new Compte ("Compte courant", 20000.94, "EUR", $titulaire2);


// echo $titulaire1."<br>";
// echo $titulaire2."<br>";
// echo $compte2."<br>";
echo $titulaire1->afficherDetails()."<br>";

echo $compte1->debiter(50)."<br>";
echo $compte1->debiter(500)."<br>";
echo $compte2->crediter(500)."<br>";

// echo $titulaire1->titulaireInfos()."<br><br>";

echo $compte1->virer(20, $compte3)."<br>";

echo $titulaire1->afficherDetails()."<br>";
echo $compte1->afficherDetails()."<br>";

