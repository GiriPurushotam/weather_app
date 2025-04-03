<?php

declare(strict_types=1);

namespace App\Service;

class WeatherService
{
    private $apiKey;
    private $apiUrl = 'http://api.openweathermap.org/data/2.5/weather';

    public function __construct()
    {
        // Get API from congif
        $config = require __DIR__ . '/../../config/config.php';
        $this->apiKey = $config['API_KEY'];
    }

    public function getWeather($city)
    {
        $url = $this->apiUrl . "?q={$city}&appid={$this->apiKey}&units=metric";
        $response = file_get_contents($url);

        if ($response === false) {
            return "Unable to fetch weather data";
        }

        $data = json_decode($response, true);

        if ($data['cod'] !== 200) {
            return 'Error : ' . $data['message'];
        }

        // Else return weather info 
        return [
            'city' => $data['name'],
            'temp' => $data['main']['temp'],
            'description' => $data['weather'][0]['description'],
            'humidity'   => $data['main']['humidity'],
            'wind_speed' => $data['wind']['speed'] . 'm.s'
        ];
    }
}
