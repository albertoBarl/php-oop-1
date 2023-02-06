<?php
include __DIR__ . "/Models/Movie.php";

// films
$movie1 = new Movie("Pierino", "la storia italiana", "5", ["comedy", "animation"]);
$movie2 = new Movie("Pippo", "alla ricerca di pluto", "3", ["animation"]);
$movie3 = new Movie("Topolino", "a casa con Minnie", "2", ["hentai"]);
$movies = [$movie1, $movie2, $movie3];
