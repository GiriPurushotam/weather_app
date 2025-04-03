<?php

declare(strict_types=1);

namespace app\Controller;

use App\Service\WeatherService;

class WeatherController
{
    private $weatherService;

    public function __construct()
    {
        $this->weatherService = new WeatherService();
    }

    public function getWeather($city)
    {
        $weatherData = $this->weatherService->getWeather($city);
        if ($weatherData) {
            return json_encode($weatherData);
        } else {
            return json_encode(['error' => 'City not found or API error']);
        }
    }
}
