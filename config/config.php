<?php

use Dotenv\Dotenv;

if (file_exists(__DIR__ . '/../.env')) {
    $Dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $Dotenv->load();
}

return [
    'API_KEY' => $_ENV['OPEN_WEATHER_API_KEY'] ?? getenv('OPEN_WEATHER_API_KEY')
];
