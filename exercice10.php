<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemple post</h1>
    <form action="" method="post">
        <p>
            <label for="first_name">Prénom</label>
            <input type="first_name" name="first_name" id="first_name">
        </p>
        <p>
            <label for="last_name">Nom</label>
            <input type="last_name" name="last_name" id="last_name">
        </p>
        <input type="submit" value="Envoyer">
    </form>
    <?php if (isset($_POST["first_name"]) && isset($_POST["last_name"])) { ?>
        <h2>Bonjour <?=htmlspecialchars($_POST["first_name"])?> <?=htmlspecialchars($_POST["last_name"])?></h2>
    <?php } ?>
</body>
</html>