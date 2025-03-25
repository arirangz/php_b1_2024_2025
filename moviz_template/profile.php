<?php 
// importer user.php
require_once "libs/user.php";
require_once "templates/header.php";

// si pas connecté 
if (!isLoggedIn()) {
    //on redirige vers login.php
    header("Location: login.php");
}



?>


<div class="container col-xxl-8 px-4 py-5">
    <h1>Mon compte</h1>

    <h2>Vous êtes connectés en tant que <?=$_SESSION["email"]?></h2>
</div>

<?php require_once "templates/footer.php" ?>
