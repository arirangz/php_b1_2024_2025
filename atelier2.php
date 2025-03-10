<?php

$games = [
    ["name" => "GTA", "minimumAge" => 18],
    ["name" => "Animal Crossing", "minimumAge" => 3],
    ["name" => "Super Mario Galaxy", "minimumAge" => 7],
];
$age = 18;

function checkGameAge(int $gameAge, int $userAge):bool
{
    /*
    if ($userAge >= $gameAge) {
        return true;
    } else {
        return false;
    }
    */
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
    <ul>
        <?php foreach($games as $game) { ?>
            <?php if (checkGameAge($game["minimumAge"],$age) === true) { ?>
                <li>Vous êtes autorisés à jouer à <?=$game["name"]?></li>
            <?php } else { ?>
                <li>Vous n'êtes pas autorisés à jouer à <?=$game["name"]?></li>
            <?php } ?>
        <?php } ?>

    </ul>
</body>
</html>