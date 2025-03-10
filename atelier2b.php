<?php

$games = [
    ["name" => "GTA", "minimumAge" => 18, "genre" => ["mmo", "action"] ],
    ["name" => "Animal Crossing", "minimumAge" => 3, "genre" => ["simulation", "gestion"]],
    ["name" => "Super Mario Galaxy", "minimumAge" => 7, "genre" => ["plateforme", "exploration"]],
];


function checkGameAge(int $gameAge, int $userAge):bool
{
    return $userAge >= $gameAge;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="" method="post">
        <p>
            <label for="age">Entrez votre age</label>
            <input type="number" name="age" id="age">
        </p>
        <input type="submit" value="Verifier">
    </form>
 
    <?php if (isset($_POST["age"])) { ?>
        <ul>
            <?php foreach($games as $game) { ?>
                <?php if (checkGameAge($game["minimumAge"],(int)$_POST["age"]) === true) { ?>
                    <li>Vous êtes autorisés à jouer à <?=$game["name"]?>, genre :
                        
                        <?=implode(", ", $game["genre"]) ?>
                        </li>
                <?php } else { ?>
                    <li>Vous n'êtes pas autorisés à jouer à <?=$game["name"]?>
                        genre:
                        <?php foreach ($game["genre"] as $genre) { ?>
                            <?= $genre;?>
                        <?php } ?>
                    </li>
                <?php } ?>
            <?php } ?>

        </ul>
    <?php } ?>
</body>
</html>