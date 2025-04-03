<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\WeatherService;

class WeatherController
{
    private $weatherService;

    public function __construct()
    {
        $this->weatherService = new WeatherService();
    }
}
