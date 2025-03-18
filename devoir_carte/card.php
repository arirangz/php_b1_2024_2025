

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if (isset($_POST["nom_destinataire"]) && isset($_POST["nom_expediteur"])  && isset($_POST["message"])) { ?> 
        <section style="background-color: <?=$_POST["couleur_fond"]?>; color: <?=$_POST["couleur_texte"]?>">
            <h1>Bonne année <?=htmlspecialchars($_POST["nom_destinataire"]) ?> !  </h1>
            <h2><?=htmlspecialchars($_POST["message"]) ?>  de la part de <?=htmlspecialchars($_POST["nom_expediteur"]) ?></h2>
        </section>
        <?php } else { ?>
            <h1>Veuillez remplir le formulaire</h1>
        <?php } ?>
</body>
</html>