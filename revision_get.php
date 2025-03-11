<?php
if ( isset($_GET["prenom"]) ) {
    echo htmlspecialchars($_GET["prenom"]);
} else {
    echo "Il manque le prénom dans l'url";
}



?>

