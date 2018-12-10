<?php

return[
    'home' => [
        'path' => '/',
        'method' => ['GET', 'POST'],
        'controller' => 'home'
    ],
    'login' => [
        'path' => '/login',
        'method' => ['GET', 'POST'],
        'controller' => 'login'
    ],
    'register' =>[
        'path' => '/register',
        'method' => ['GET', 'POST'],
        'controller' => 'register'
    ],
    'contact' =>[
        'path' => '/contact',
        'method' => ['GET', 'POST'],
        'controller' => 'contact'
    ],
    'articleDetailsView' => [
        'path' => '/articleDetailsView/{id}',
        'method' => ['GET', 'POST'],
        'controller' => 'articleDetailsView',
        'param' => [
            'id' => '\d+'
        ]
    ],
    'addArticle' =>[
        'path' => '/addArticle',
        'method' => ['GET', 'POST'],
        'controller' => 'addArticle'
    ],
    'modifyArticle' =>[
        'path' => '/modifyArticle/{id}',
        'method' => ['GET', 'POST'],
        'controller' => 'modifyArticle',
        'param' => [
            'id' => '\d+'
        ]
    ],
    //'addComment' => [
        //'path' => '/addComment/{id}',
        //'method' => ['GET', 'POST'],
        //'controller' => 'addComment',
        //'param' => [
            //'id' => '\d+'
        //]
    //],
    'administration' =>[
        'path' => '/administration',
        'method' => ['GET', 'POST'],
        'controller' => 'administration'
    ],
    'deconnexion' =>[
        'path' => '/deconnexion',
        'method' => ['GET', 'POST'],
        'controller' => 'deconnexion'
    ]
];
