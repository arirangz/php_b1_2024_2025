<article>
    <h2>Nom du produit : <?=$product["name"] ?></h2>
    <h2>Prix: <?=$product["priceWithoutVAT"]; ?>€ soit <?=calculatePriceWithVAT($product["priceWithoutVAT"], $product["vat"])?> TTC</h2>
</article>