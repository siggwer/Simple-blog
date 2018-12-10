<?php

require __DIR__ . '/controllerResolver.php';

function start (array $request) {
    $routes = require __DIR__ . './../config/routes.php';

    foreach ($routes as $key => $route) {

        switch ($route){
            case in_array($request['REQUEST_METHOD'], $route['method']):
                $param = catchParam($route['param'] ?? [], $request['REQUEST_URI'], $route['path']);
                if ($route['path'] === $request['REQUEST_URI'] && in_array($_SERVER['REQUEST_METHOD'], $route['method'])){
                    resolveController($route['controller'], ['REQUEST' => transformRequest(), 'ATTR' => $param ?? []]);
                }
                break;
            default;
                getView('Not found', 'template404.php', '404View.php');
                //Code
                break;
        }
    }
}

function catchParam(array $param, string $path, string &$routePath) {

    $results = [];

    foreach ($param as $key => $regex) {
        preg_match('#'.$regex.'#', $path, $result);
        if (\is_null($result)) {
            return;
        }

        $routePath = count($result) > 0 ? strtr($routePath, ['{'.$key.'}' => $result[0]]) : $routePath;

        return $result;
    }
}

function transformRequest() {
    return ['GET' => $_GET, 'POST' => $_POST, 'FILES' => $_FILES, 'SESSION' => $_SESSION, 'SERVER' => $_SERVER];
}
