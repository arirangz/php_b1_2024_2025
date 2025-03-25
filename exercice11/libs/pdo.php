<?php
try
{
    $pdo = new PDO("mysql:dbname=keyce_exercice11;host=localhost;charset=utf8mb4", "root", "");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

