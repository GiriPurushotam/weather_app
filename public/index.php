<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\WeatherController;

$controller = new WeatherController();

$city = $_GET['city'] ?? 'Kathmandu';
echo json_encode($controller->getWeather($city));
