
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="recherche">rechercher</label>
            <input type="text" name="recherche" id="recherche">
        </p>
        <input type="submit" value="OK">
    </form>
    <?php if (isset($_GET["recherche"]))  {?>
        <h2>Vous avez recherché: <?=htmlspecialchars($_GET["recherche"] )?></h2>
    <?php } ?>
</body>
</html>