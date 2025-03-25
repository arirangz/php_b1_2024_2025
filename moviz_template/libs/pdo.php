<?php
try
{
    $pdo = new PDO("mysql:dbname=keyce_2024_movie;host=localhost;charset=utf8mb4", "root", "");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

