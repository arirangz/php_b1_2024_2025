<?php

function calculerSurface(float $longeur, float $largeur):float
{
    return $longeur*$largeur;
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
        <li>Chambre: <?=calculerSurface(3,3)?>m²</li>
        <li>Salon: <?=calculerSurface(4,5)?>m²</li>
    </ul>
</body>
</html>