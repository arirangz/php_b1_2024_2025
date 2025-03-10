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
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </p>
        <input type="submit" value="Envoyer">
    </form>
    <?php if (isset($_POST["email"])) { ?>
        <h2>Email de l'utilisateur: <?=htmlspecialchars($_POST["email"])?></h2>
    <?php } ?>
</body>
</html>