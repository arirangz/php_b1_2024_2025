<?php

$products = [
    ["name" => "Ordinateur DELL", "priceWithoutVAT" => 1000, "vat" => 20],
    ["name" => "Ordinateur Asus", "priceWithoutVAT" => 1200, "vat" => 20],
    ["name" => "Ordinateur Lenovo", "priceWithoutVAT" => 500, "vat" => 20],
];

require_once "product_functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <p>Site e-commerce</p>
    </header>
    <h1>Exemple include/require</h1>


   <?php 
        
    foreach($products as $product) {
        require "bloc_product.php";
    }
   ?>
 

    
    <footer>Tous droits réservés</footer>
</body>
</html>