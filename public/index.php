<?php

require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/web', 'MainController#web', 'web');

$match = $router->match();

if (is_array($match)) {
    $target = explode('#', $match['target']);
    $controllerName = '\DevSquad\Controllers\\' . $target[0];
    $methodName = $target[1];
    $params = $match['params'];

    $controller = new $controllerName();
    $controller->$methodName($params);

} else {
  http_response_code(404);
    $controller = new \DevSquad\Controllers\MainController();
    $controller->error404();
}