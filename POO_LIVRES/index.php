<h1>POO Livres</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

$stephenKing = new Auteur ("Stephen", "King");

$ca = new Livre ("Ca", 1138, "1986-01-01", 20, $stephenKing);
$simetierre = new Livre ("Simetierre", 374, "1983-01-01", 15, $stephenKing);
$leFleau = new Livre ("Le Fléau", 823, "1978-01-01", 14, $stephenKing);
$shining = new Livre ("Shining", 447, "1977-01-01", 16, $stephenKing);

// echo $stephenKing."<br>";
// echo $ca."<br>";

echo $stephenKing->afficherBibliographie();