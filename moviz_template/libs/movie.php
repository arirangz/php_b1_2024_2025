<?php

function getMovies():array
{
    $movies = [
        ["title" => "Matrix", "summary" => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber‐espace.", "release_date" => "1999", "image" => "https://www.themoviedb.org/t/p/w1280/pEoqbqtLc4CcwDUDqxmEDSWpWTZ.jpg"],
        ["title" => "Inception", "summary" => "Dom Cobb est un voleur expérimenté, le meilleur dans l'art dangereux de l'extraction, voler les secrets les plus intimes enfouis au plus profond du subconscient durant une phase de rêve, lorsque l'esprit est le plus vulnérable. ", "release_date" => "2010", "image" => "https://www.themoviedb.org/t/p/w1280/aej3LRUga5rhgkmRP6XMFw3ejbl.jpg"],
        ["title" => "Old Boy", "summary" => "À la fin des années 80, Oh Dae-Soo, père de famille sans histoire, est enlevé un jour devant chez lui. Séquestré pendant plusieurs années dans une cellule privée, son seul lien avec l'extérieur est une télévision.", "release_date" => "2003", "image" => "https://www.themoviedb.org/t/p/w1280/u0Ct3708zXaoJCkF65bLfenQmhM.jpg"],
    ];

    return $movies;

}

function getMovieByIndex(int $index):array
{
    $movies = getMovies();

    return $movies[$index];
}