<?php

$products = [
    ["name" => "Ordinateur DELL", "priceWithoutVAT" => 1000, "vat" => 20],
    ["name" => "Ordinateur Asus", "priceWithoutVAT" => 1200, "vat" => 20],
    ["name" => "Ordinateur Lenovo", "priceWithoutVAT" => 500, "vat" => 20],
];

function calculatePriceWithVAT(float $price, float $vat):float
{
    return $price + $price * $vat/100;
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
    <section>
        <h1>Produits</h1>
        <?php foreach($products as $product) { ?>
            <article>
                <h2><?=$product["name"] ?></h2>
                <h3>Prix: <?=$product["priceWithoutVAT"] ?>€ HT soit <?=calculatePriceWithVAT($product["priceWithoutVAT"], $product["vat"])?>€ TTC</h3>
            </article>
        <?php } ?>
    </section>
</body>
</html>