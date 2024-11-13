<h1>POO Entreprise</h1>

<?php

spl_autoload_register(function ($class_name) {
    require $class_name.'.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");

$stephane = new Employe ("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanFormation);

echo $elanFormation->getRaisonSociale()." a été créé le ".$elanFormation->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante : ".$elanFormation->getAdresse().", ".$elanFormation->getCodePostal()." ".$elanFormation->getVille()."</br>";
echo $elanFormation->getRaisonSociale()." a été créé le ".$elanFormation->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante : ".$elanFormation->getAdresseComplete()."</br>";
echo $elanFormation."</br>";
echo $elanFormation->getInfos()."</br></br>";

echo $stephane."</br>";
echo $stephane->getInfos()."</br>";

