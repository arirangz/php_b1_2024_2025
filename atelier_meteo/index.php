<?php
$villes = [
    ["name"=>"Montpellier","weather"=>"pluvieux","min_temp"=>8,"max_temp"=>16],
    ["name"=>"Londres","weather"=>"pluvieux","min_temp"=>1,"max_temp"=>8],
    ["name"=>"Libreville","weather"=>"couvert","min_temp"=>26,"max_temp"=>33],
    ["name"=>"Honolulu","weather"=>"ensoleille","min_temp"=>20,"max_temp"=>32],
    ["name"=>"Lille","weather"=>"partiellement couvert","min_temp"=>4,"max_temp"=>11]

]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="ville" id="ville">
            <?php foreach($villes as $index=>$ville) { ?>
                <?php  
                    $selected="";
                    if (isset($_POST["ville"]) && (int)$_POST["ville"] === $index ) {
                        $selected="selected";
                    }
                ?>
                <option <?=$selected?> value="<?=$index?>"><?=$ville["name"]?></option>
            <?php } ?>
        </select>
        <input type="submit" value="OK">
    </form>
    <?php if (isset($_POST["ville"])) { ?>
    <section>
        <?php $index = (int)$_POST["ville"] ?>
        <h2>Ville: <?=$villes[$index]["name"] ?></h2>
        <h3>Temps: <?=$villes[$index]["weather"] ?></h3>
        <p>Température min.: <?=$villes[$index]["min_temp"] ?> - Température max.: <?=$villes[$index]["max_temp"] ?></p>
    </section>
    <?php } ?>
</body>
</html>