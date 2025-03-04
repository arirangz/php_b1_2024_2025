<?php
$user_name = "John";
$age = 15;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            if ($age < 18) {
                echo "Notre jeu est accessible aux personnes de plus de 18 ans";
            } else {
                echo "Bienvenue sur notre jeu $user_name";
            }
        ?>
    </p>
</body>
</html>