<h1>POO Entreprise</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
$tf1 = new Entreprise("TF1", "1980-01-01", "13 rue de la seine", "75000", "Paris");
$franceTravail = new Entreprise("France Travail", "1990-01-01", "1 avenue du travail", "75000", "Paris");

$stephane = new Employe ("SMAIL", "Stéphane", "stephane@elan-formation.fr");
$mickael = new Employe ("MURMANN", "Mickael", "mickael@elan-formation.fr");


$c1 = new Contrat($elanFormation, $stephane, "2020-01-01");
$c2 = new Contrat($elanFormation, $mickael, "2010-01-01");
$c3 = new Contrat($tf1, $stephane, "2022-01-01");
$c4 = new Contrat($franceTravail, $stephane, "2023-01-01");

echo $elanFormation->getRaisonSociale()." a été créé le ".$elanFormation->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante : ".$elanFormation->getAdresse().", ".$elanFormation->getCodePostal()." ".$elanFormation->getVille()."</br>";
echo $elanFormation->getRaisonSociale()." a été créé le ".$elanFormation->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante : ".$elanFormation->getAdresseComplete()."</br>";
echo $elanFormation."</br>";
echo $elanFormation->getInfos()."</br></br>";

echo $stephane."</br>";

echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();
echo $stephane->afficherEntreprises();
echo $mickael->afficherEntreprises();

