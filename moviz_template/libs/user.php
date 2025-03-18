<?php

function loginUser(string $email, string $password):bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        return true;
    } else {
        return false;
    }
}