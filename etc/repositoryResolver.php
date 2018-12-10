<?php

require_once __DIR__ . './../etc/manager.php';
require_once __DIR__ . './../src/repository/homeRepository.php';
require_once __DIR__ . './../src/repository/articleRepository.php';
require_once __DIR__ . './../src/repository/addArticleRepository.php';
require_once __DIR__ . './../src/repository/modifyArticleRepository.php';
require_once __DIR__ . './../src/repository/addCommentRepository.php';
require_once __DIR__ . './../src/repository/loginRepository.php';
require_once __DIR__ . './../src/repository/registerRepository.php';
require_once __DIR__ . './../src/repository/administrationRepository.php';

try
{
    $bdd = buildConnection();
}
catch (Exception $e)
{
    die('Erreur :  \'Impossible de charger le site. Merci de renouveler votre visite\'');
}

function getRepository($repository, $params = [])
{
    return call_user_func($repository, $params);
}
