<?php

//Verification of identifiers
function getMember($pseudo)
{
    $query = buildConnection()->prepare("SELECT id, pseudo, password FROM user WHERE pseudo = :pseudo");
    $query->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}