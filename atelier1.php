<?php
$countries = [
    ["name" => "Congo", "population" => 6],
    ["name" => "Gabon", "population" => 3],
    ["name" => "Cameroun", "population" => 50],
    ["name" => "RDC", "population" => 105],
    ["name" => "France", "population" => 68],
    ["name" => "Senegal", "population" => 18],
    ["name" => "Bénin", "population" => 14],
    ["name" => "Congo", "population" => 6],
    ["name" => "Congo", "population" => 6],
];

$biggestPopulation = null;
$biggestName = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atelier 1</h1>
    <h2>Liste des pays</h2>
    <ul>
        <?php foreach($countries as $country) { 
            if ($country["population"] > $biggestPopulation) {
                $biggestPopulation = $country["population"];
                $biggestName = $country["name"];
            }
            ?>
            <li><?=$country["name"]?> - Population: <?=$country["population"]?></li>
        <?php } ?>
    </ul>
    <h2>Le pays le plus peuplé est <?=$biggestName?> avec une population <?=$biggestPopulation?></h2>
</body>
</html>