<?php

function administration($param = [])
{
    if(!isset($param['REQUEST']['SESSION']['pseudo'])){
        echo 'Vous n\'êtes pas autorisé à accéder à cette page';
        header('Location: /login');
    }
    $pseudo = $param['REQUEST']['SESSION']['pseudo'];

    $articles = getRepository('getAdministration', $pseudo);

    echo getView('Administration', 'administrationView.php', 'templateAdministration.php', ['articles' => $articles, 'session' => $_SESSION]);
}