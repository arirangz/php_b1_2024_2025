<?php

function calculatePriceWithVAT(float $price, float $vat):float
{
    return $price + $price * $vat/100;
}

function displayProduct()
{
    
}