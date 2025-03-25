<?php

function getAllPosts(PDO $pdo):array
{
    // On prépare le requête
    $query = $pdo->prepare("SELECT * FROM post");
    // On exécute la requête
    $query->execute();
    // On récupère les posts et on les stockent dans une variable
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    // On retourne le tableau
    return $posts;
}

/*
    Récupérer un post par son id
*/
function getPostById(PDO $pdo, int $id):array|bool
{
    // On prépare le requête
    $query = $pdo->prepare("SELECT * FROM post WHERE id = :id");
    // Remplacer par la bonne valeur
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    // On exécute la requête
    $query->execute();
    // On récupère le post et on le stocke dans une variable
    $post = $query->fetch(PDO::FETCH_ASSOC);
    // On retourne le tableau
    return $post;
}