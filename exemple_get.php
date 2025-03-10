
<?php if ( isset($_GET["prenom"]) ) { ?>

    <h1>Bonjour <?=htmlspecialchars($_GET["prenom"])  ?></h1>

<?php } else { ?>
    <h1>Il manque le prénom dans la barre d'adresse</h1>
<?php } ?>