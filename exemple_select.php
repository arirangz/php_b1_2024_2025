<?php
$countries = [
    ["name" => "Congo", "population" => 6, "capital" => "Brazzaville"],
    ["name" => "Gabon", "population" => 3, "capital"=>"Libreville"],
    ["name" => "Cameroun", "population" => 50, "capital" => "Yaounde"],
    ["name" => "RDC", "population" => 105, "capital" => "Kinshasa"],
    ["name" => "France", "population" => 68, "capital" => "Paris"],
    ["name" => "Senegal", "population" => 18, "capital" => "Dakar"],
    ["name" => "Bénin", "population" => 14, "capital" => "Porto-novo"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <select name="country" id="country">
            <?php foreach($countries as $index=>$country) { ?>
                <?php  
                    $selected="";
                    if (isset($_GET["country"]) && (int)$_GET["country"] === $index ) {
                        $selected="selected";
                    }
                ?>
                <option <?=$selected?> value="<?=$index?>"><?=$country["name"]?></option>
            <?php } ?>
        </select>
        <input type="submit" value="OK">
    </form>
    <?php if (isset($_GET["country"])) { ?>
    <section>
        <?php $index = (int)$_GET["country"] ?>
        <h2>Pays: <?=$countries[$index]["name"] ?></h2>
        <h3>Capital: <?=$countries[$index]["capital"] ?></h3>
        <h3>Population: <?=$countries[$index]["population"] ?></h3>
    </section>
    <?php } ?>
</body>
</html>