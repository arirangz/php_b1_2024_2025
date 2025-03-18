<?php

$questions = [
                    [
                        "nom_question" => "Quelle est la capital du Japon ?",
                        "propositions" => ["Paris", "Tokyo", "Seoul", "Madrid"],
                        "bonne_reponse" => "Tokyo"
                    ],
                    [
                        "nom_question" => "Quelle est la capital de la Corée du Sud ?",
                        "propositions" => ["Paris", "Tokyo", "Seoul", "Madrid"],
                        "bonne_reponse" => "Seoul"
                    ],
                    [
                        "nom_question" => "Quelle est la capital de la France ?",
                        "propositions" => ["Paris", "Tokyo", "Seoul", "Madrid"],
                        "bonne_reponse" => "Paris"
                    ],
 ];

 if (isset($_GET["index_question"])) {
     $index = (int)$_GET["index_question"];
} else {
     $index = 0;
 }

 $question = $questions[$index];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quiz</h1>

    <h2><?=$question["nom_question"]?></h2>

    <form action="" method="post">
        <?php foreach($question["propositions"] as $proposition) { ?>
            <p>
                <input type="radio" name="reponse" id="<?=$proposition?>" value="<?=$proposition?>">
                <label for="<?=$proposition?>"><?=$proposition?></label>
            </p>
        <?php } ?>
        <input type="submit" value="Envoyer">
    </form> 

    <?php if (isset($_POST["reponse"])) { ?>
        <?php if ($_POST["reponse"] ===  $question["bonne_reponse"] ) { ?>
            <h2>Bravo, la bonne est bien <?=$question["bonne_reponse"]?> </h2>
        <?php } else { ?>
            <h2>Perdu, la bonne réponse était <?=$question["bonne_reponse"] ?></h2>
        <?php } ?>
        <a href="index.php?index_question=<?=$index+1?>">Question suivante</a>
    <?php } ?>
</body>
</html> 