<?php

// Check member exist
function getCheck($pseudo)
{
    $query = buildConnection()->prepare("SELECT id, pseudo FROM user WHERE pseudo = :pseudo");
    $query->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}

// Insert a new member into the database
function getRegister($param = [])
{
    $query = buildConnection()->prepare('INSERT INTO user(pseudo, password, email) VALUES(:pseudo, :password, :email)');
    $query->bindValue(':pseudo', $param['pseudo'], \PDO::PARAM_STR);
    $query->bindValue(':password', $param['password'], \PDO::PARAM_STR);
    $query->bindValue(':email', $param['email'], \PDO::PARAM_STR);
    return $query->execute();
}