<?php

$utilisateurs = [
    ["nom" => "Dupond", "prenom" => "Jean", "age" => 26],
    ["nom" => "Martin", "prenom" => "Rose", "age" => 35],
    ["nom" => "Doe", "prenom" => "Jane", "age" => 31]
];

foreach($utilisateurs as $utilisateur) {
    echo $utilisateur["nom"]." ".$utilisateur["prenom"]."<br>";
}



?>
