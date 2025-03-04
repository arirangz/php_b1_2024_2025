<?php
$gameName = "Little Nightmares 3";
$isNew = true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> 
        <?=$gameName?> 
        <?php if($isNew) { ?>
            <strong>Nouveauté!</strong>
        <?php } ?>
    </p>
</body>
</html>