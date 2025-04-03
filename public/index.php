<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\WeatherController;

$controller = new WeatherController();

if (isset($_GET['city'])) {
    echo $controller->getWeather($_GET['city']);
} else {
    echo  json_encode(['error' => 'City parameter is required']);
}
