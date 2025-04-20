<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\WeatherController;
use App\Router;

$router = new Router();
$router->addRoute('GET', '/weather_app/public/', 'App\Controller\WeatherController@getWeather');

$route = $router->match(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($route) {
    [$controllerName, $action] = explode('@', $route);
    $controller = new $controllerName();
    echo $controller->$action();
} else {
    http_response_code(404);
    echo "404 - Page not founds";
}
