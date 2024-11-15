<h1>POO CINEMA</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});


// $genre = new Genre ("Genre");
$sf = new Genre ("Science Fiction");
$horreur = new Genre ("Horreur");
$aventure = new Genre ("Aventure");
$action = new Genre ("Action");
$drame = new Genre ("Drame");

// $role = new Role ("Role");
$batman = new Role("Batman");
$cooper = new Role("Cooper");
$louise = new Role("Louise Banks");
$jedi = new Role("Luke Skywalker");
$darkKnight = new Role("Dark Knight");
$jack = new Role("Jack Dawson");
$clarice = new Role("Clarice Starling");
$samuel = new Role("Jules Winnfield");
$ethan = new Role("Ethan Hunt");
$mia = new Role("Mia Wallace");

// $realisateur = new Realisateur ("Nom", "Prenom", "Sexe", "naissance");
$villeneuve = new Realisateur("Villeneuve", "Denis", "Homme", "1967-10-03");
$nolan = new Realisateur("Nolan", "Christopher", "Homme", "1970-07-30");
$burton = new Realisateur("Burton", "Tim", "Homme", "1958-08-25");
$spielberg = new Realisateur("Spielberg", "Steven", "Homme", "1946-12-18");
$cameron = new Realisateur("Cameron", "James", "Homme", "1954-08-16");
$tarantino = new Realisateur("Tarantino", "Quentin", "Homme", "1963-03-27");

// $acteur = new acteur ("Nom", "Prenom", "Sexe", "naissance");
$keaton = new Acteur("Keaton", "Michael", "Homme", "1951-09-05");
$mcConaughey = new Acteur("McConaughey", "Matthew", "Homme", "1969-11-04");
$adams = new Acteur("Adams", "Amy", "Femme", "1974-08-20");
$hamill = new Acteur("Hamill", "Mark", "Homme", "1951-09-25");
$neeson = new Acteur("Neeson", "Liam", "Homme", "1952-06-07");
$dicaprio = new Acteur("DiCaprio", "Leonardo", "Homme", "1974-11-11");
$foster = new Acteur("Foster", "Jodie", "Femme", "1962-11-19");
$jackson = new Acteur("Jackson", "Samuel L.", "Homme", "1948-12-21");
$cruise = new Acteur("Cruise", "Tom", "Homme", "1962-07-03");
$thurman = new Acteur("Thurman", "Uma", "Femme", "1970-04-29");


// $film = new Film ("Titre", $realisateur, "sortie", duree en minutes, $genre, "synopsis");
// Films de Science Fiction
$arrival2016 = new Film("Premier Contact", $villeneuve, "2016-12-16", 114, $sf, "Un contact avec une civilisation extraterrestre...");
$interstellar = new Film("Interstellar", $nolan, "2014-11-07", 169, $sf, "Des astronautes partent à la recherche d'une nouvelle planète habitable.");
$batman1989 = new Film("Batman", $burton, "1989-02-01", 126, $action, "Batman affronte le Joker dans Gotham City.");
$jurassicPark = new Film("Jurassic Park", $spielberg, "1993-06-11", 127, $sf, "Des dinosaures clonés prennent vie sur une île.");
$avatar = new Film("Avatar", $cameron, "2009-12-18", 162, $sf, "Sur la planète Pandora, un ex-soldat infiltre une tribu d'extraterrestres.");
$pulpFiction = new Film("Pulp Fiction", $tarantino, "1994-10-14", 154, $drame, "Une série d'histoires entrelacées dans le monde du crime à Los Angeles.");


// $casting = new Casting ($film, $acteur, $role);
$casting1 = new Casting($batman1989, $keaton, $batman);
$casting2 = new Casting($interstellar, $mcConaughey, $cooper);
$casting3 = new Casting($arrival2016, $adams, $louise);
$casting4 = new Casting($jurassicPark, $hamill, $jedi);
$casting5 = new Casting($avatar, $neeson, $darkKnight);
$casting6 = new Casting($pulpFiction, $jackson, $samuel);
$casting7 = new Casting($interstellar, $dicaprio, $jack);
$casting8 = new Casting($jurassicPark, $foster, $clarice);
$casting9 = new Casting($avatar, $cruise, $ethan);
$casting10 = new Casting($pulpFiction, $thurman, $mia);


// echo "$villeneuve<br>";
// echo "$arrival2016<br>";
// echo "$sf<br>";
// echo "<br>";
echo $keaton->listeFilms();
echo $villeneuve->listeFilms();
echo $batman->listeActeurs();
echo $jurassicPark->listeActeurs();
echo $sf->listeFilms();
// var_dump($keaton);

