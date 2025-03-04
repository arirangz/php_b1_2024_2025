<?php
$user_name = "John";
$age = 20;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($age < 18) { ?>
        <p><?="Notre jeu est accessible aux personnes de plus de 18 ans"; ?></p>
    <?php } else { ?>
        <h1><?="Bienvenue sur notre jeu"?></h1>
        <h2>Nom d'utilisateur <?=$user_name?></h2>
    <?php } ?>

    <?php if ($age < 18): ?>
        <p><?="Notre jeu est accessible aux personnes de plus de 18 ans"; ?></p>
    <?php else: ?>
        <h1><?="Bienvenue sur notre jeu"?></h1>
        <h2>Nom d'utilisateur <?=$user_name?></h2>
    <?php endif; ?>

</body>
</html>