<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_GET["nom"])) { ?>
        <h1>Joyeux anniversaire <?=htmlspecialchars($_GET["nom"])?></h1>
    <?php } else { ?>
        <h1>Paramètre nom n'est pas présent dans l'url</h1>
    <?php } ?>
</body>
</html>