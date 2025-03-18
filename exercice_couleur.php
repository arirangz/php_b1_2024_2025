<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exerice couleur</h1>
    <form action="" method="post">
        <p>
            <label for="color">Quelle est votre couleur préférée ?</label>
            <input type="text" name="color" id="color">
        </p>
        <input type="submit" value="Envoyer">
    </form>

    <?php if (isset($_POST["color"])) { ?>
        <h2>Votre couleur préférée est <?=htmlspecialchars($_POST["color"])?></h2>

        <?php if ($_POST["color"] === "rouge") { ?>
            <h3>Rouge est aussi ma couleur préférée</h3>
        <?php } ?>
    <?php } ?>
</body>
</html>