<?php

function loginUser(PDO $pdo, string $email, string $password):bool
{
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($password, $user["password"])) {
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

function addUser(PDO $pdo, string $nickname, string $email, string $password):bool
{
    $query = $pdo->prepare("INSERT INTO user (nickname, email, password) VALUES(:nickname, :email, :password)");

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query->bindValue(":nickname", $nickname);
    $query->bindValue(":email", $email);
    $query->bindValue(":password", $password);

    return $query->execute();

}