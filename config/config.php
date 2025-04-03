<?php

use Dotenv\Dotenv;

$Dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$Dotenv->load();

return [
    'API_KEY' => $_ENV['OPEN_WEATHER_API_KEY']
];
