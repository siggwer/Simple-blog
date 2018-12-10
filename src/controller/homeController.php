<?php

function home()
{
    $articles = getRepository('getHome');

    echo getView('Home', 'homeView.php', 'template.php', ['articles' => $articles]);
}
