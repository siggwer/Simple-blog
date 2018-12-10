<?php

require_once __DIR__ . '/repositoryResolver.php';
require_once __DIR__ . '/templateResolver.php';
require_once __DIR__ . '/flashBag.php';
require_once __DIR__ . '/redirect.php';
require_once __DIR__ . '/validateContact.php';
require_once __DIR__ . '/htmlpurifier.php';
require_once __DIR__ . './../src/controller/homeController.php';
require_once __DIR__ . './../src/controller/loginController.php';
require_once __DIR__ . './../src/controller/registerController.php';
require_once __DIR__ . './../src/controller/contactController.php';
require_once __DIR__ . './../src/controller/articleViewController.php';
require_once __DIR__ . './../src/controller/addArticleController.php';
require_once __DIR__ . './../src/controller/modifyArticleController.php';
//require_once __DIR__ . './../src/controller/addCommentController.php';
require_once __DIR__ . './../src/controller/administrationViewController.php';
require_once __DIR__ . './../src/controller/deconnexionController.php';
require_once __DIR__ . '/swiftMail.php';

function resolveController($controller, $param = [])
{
    call_user_func($controller, $param);
}
