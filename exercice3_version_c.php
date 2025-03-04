<?php
$user_name = "John";
$age = 15;

if ($age < 18) {
    $message = "Notre jeu est accessible aux personnes de plus de 18 ans";
} else {
    $message = "Bienvenue dans notre jeu $user_name";
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
    <p><?=$message?></p>
</body>
</html>