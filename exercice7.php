<?php

function getPriceWithVAT(float $price, float $vat):float
{
    return $price + $price*$vat/100;
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
    <?php
    // Créer une variable $priceWithTax et appeler la fonction pour stocker le résultat dans cette variable
    $priceWithoutTax = 1000;
    $priceWithTax = getPriceWithVAT($priceWithoutTax, 20);
    ?>
    <h2>Dell Laptop: <?=$priceWithoutTax ?>€ HT soit <?=$priceWithTax?>€ TTC</h2>
</body>
</html>