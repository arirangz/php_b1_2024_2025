<?php

function getMovies(PDO $pdo):array
{
    // On prépare le requête
    $query = $pdo->prepare("SELECT * FROM movie");
    // On exécute la requête
    $query->execute();
    // On récupère les films et on les stockent dans une variable
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);

    return $movies;
}

function getMovieById(PDO $pdo, int $id):array
{
    // On prépare le requête
    $query = $pdo->prepare("SELECT * FROM movie WHERE id = :id");
    // Remplacer par la bonne valeur
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    // On exécute la requête
    $query->execute();
    // On récupère le post et on le stocke dans une variable
    $movie = $query->fetch(PDO::FETCH_ASSOC);
    // On retourne le tableau
    return $movie;

}