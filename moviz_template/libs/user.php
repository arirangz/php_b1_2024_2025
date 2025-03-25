<?php

function loginUser(string $email, string $password):bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        // Pour des raisons de sécurité on regénère l'id de session
        session_regenerate_id(true);
        $_SESSION["email"] = $email;
        return true;
        
    } else {
        return false;
    }
}

function isLoggedIn():bool
{
    if (isset($_SESSION["email"])) {
        return true;
    } else {
        return false;
    }
}