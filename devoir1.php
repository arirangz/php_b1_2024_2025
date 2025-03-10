<?php
    $movies = [
        ["title"=> "Matrix", "year" => 1999, "director" => "Wachowski"],
        ["title"=> "Tenet", "year" => 2020, "director" => "Nolan"],
        ["title"=> "Avatar", "year" => 2008, "director" => "Cameron"],
    ];
    $recentMovieName = "";
    $recentMovieYear = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Devoir films</h1>
    <h2>Liste des films</h2>
    <ul>
        <?php foreach($movies as $movie) { ?>
            <?php 
                if ($movie["year"] > $recentMovieYear) {
                    $recentMovieName = $movie["title"];
                    $recentMovieYear = $movie["year"];
                }    
            ?>
            <li>Titre du film : <?=$movie["title"] ?> - Année de sortie : <?=$movie["year"] ?></li>
        <?php } ?>
    </ul>
    <h2>Film le plus récent</h2>
    <h3><?=$recentMovieName?> - <?=$recentMovieYear ?></h3>
</body>
</html>