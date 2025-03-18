<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire création de carte de voeux</h1>
    <form action="card.php" method="post">
        <p>
            <label for="nom_expediteur">Nom de l'expéditeur</label>
            <input type="text" name="nom_expediteur" id="nom_expediteur">
        </p>
        <p>
            <label for="nom_destinataire">Nom du destnataire</label>
            <input type="text" name="nom_destinataire" id="nom_destinataire">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="couleur_fond">Couleur de fond</label>
            <input type="color" name="couleur_fond" id="couleur_fond">
        </p>
        <p>
            <label for="couleur_texte">Couleur du texte</label>
            <input type="color" name="couleur_texte" id="couleur_texte">
        </p>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>