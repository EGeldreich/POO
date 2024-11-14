<h1>POO CINEMA</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});


$sf = new Genre ("Science Fiction");
$horreur = new Genre ("Horreur");
$aventure = new Genre ("Aventure");
$action = new Genre ("Action");

$villeneuve = new Realisateur ("Villeneuve", "Denis", "Homme", "1967-10-03");
$jackson = new Realisateur ("Jackson", "Peter", "Homme", "1961-10-31");

$arrival = new Film ("Premier Contact", $villeneuve, "2016-12-16", 114, $sf, "");

echo "$villeneuve<br>";
echo "$arrival<br>";