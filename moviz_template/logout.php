<?php

// Pour avoir accès à la session
session_start();
// Vider le tableau php $_SESSION
session_unset();
// Supprimer le fichier de session du serveur
session_destroy();
// On redirige l'utilisateur vers la page login.php
header("Location: login.php");