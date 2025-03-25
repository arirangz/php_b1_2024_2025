<?php


// EXEMPLE A NE PAS REPRODUIRE

$pdo = new PDO('mysql:dbname=keyce_test;host=localhost;charset=utf8mb4', 'root', '');
$id = $_GET['id'];
$query = $pdo->query("SELECT * FROM user WHERE id = $id");
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);
?>

