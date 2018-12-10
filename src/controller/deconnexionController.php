<?php

function deconnexion()
{
    //session_start();
    // Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();

    // Suppression des cookies de connexion automatique
    setcookie('pseudo', '');
    setcookie('paswword_hache', '');

    header('Location: /');
}