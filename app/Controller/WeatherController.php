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

    public function getWeather(): string
    {
        $city = $_GET['city'] ?? 'Kathmandu'; // Default City
        $weatherData = $this->weatherService->getWeather($city);

        return $this->render('weatherView.php', ['weatherData' => $weatherData]);
    }

    public function render(string $view, array $data = []): string
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../../views/' . $view;
        return ob_get_clean();
    }
}
