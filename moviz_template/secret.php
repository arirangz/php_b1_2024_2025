<?php 
    require_once "templates/header.php";

    // Ajouter le if pour rediriger vers login si on est pas connecté
    if (!isLoggedIn()) {
        //on redirige vers login.php
        header("Location: login.php");
    }

?>

<div class="container col-xxl-8 px-4 py-5">
    <h1>Page privée</h1>

</div>

<?php require_once "templates/footer.php" ?>