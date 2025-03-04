<?php
    $movies = [
        ["title"=> "Matrix", "year" => 1999, "director" => "Wachowski"],
        ["title"=> "Tenet", "year" => 2020, "director" => "Nolan"],
        ["title"=> "Avatar", "year" => 2008, "director" => "Cameron"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <h2>Affichage en ul/li</h2>
    <ul>
       <?php foreach($movies as $movie) { ?>
            <li><?=$movie["title"]?> <?=$movie["year"]?> <?=$movie["director"]?></li>
        <?php } ?>
    </ul>
    <h2>Affichage en section/article</h2>
    <section>
        <?php foreach($movies as $movie) { ?>
            <article>
                <h3>Titre: <?=$movie["title"]?></h3>
                <p>Année: <?=$movie["year"]?></p>
                <p>Réalisateur: <?=$movie["director"]?></p>
            </article>
        <?php } ?>
    </section>
</body>
</html>