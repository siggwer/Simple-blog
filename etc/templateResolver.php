<?php

//Creation of the template display
function getTemplate($template, array $params = [])
{
    if (file_exists(__DIR__ . './../template/'.$template)){
        extract($params);
        ob_start();
        require __DIR__ . './../template/'.$template;
        return ob_get_clean();
    }else{
        throw new \LogicException(
            sprintf('This template does not exists, try to load %s', __DIR__ . './../template/'.$template)
        );
    }
}

//Creation of page view
function getView($title, $template, $layout, array $params = [])
{
    $content = getTemplate($template, $params);
    $layout = getTemplate($layout, ['title' => $title, 'content' => $content]);
    echo $layout;
}

//Creation of administration view page
function getViewAdministration($title, $template, array $params = [])
{
    $content = getTemplate($template, $params);
    $layout = getTemplate('templateAdministration.php', ['title' => $title, 'content' => $content, 'session' => $_SESSION]);
    echo $layout;
}