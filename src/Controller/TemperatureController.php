<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController
{

    #[Route('/celsius-to-fahrenheit')]
    public function celsiusToFahrenheit(Request $request)
    {
        $temp = $request->query->get('celsius');
        if (!is_numeric($temp)) {
            return new Response("Error: Temperature must be a number", 400);
        }
        $fahrenheit = ($temp * 9 / 5) + 32;
        return new Response("$temp Celsius is $fahrenheit Fahrenheit");
    }

    #[Route('/fahrenheit-to-celsius')]
    public function fahrenheitToCelsius(Request $request)
    {
        $temp = $request->query->get('fahrenheit');
        if (!is_numeric($temp)) {
            return new Response("Error: Temperature must be a number", 400);
        }
        $celsius = ($temp - 32) * 5 / 9;
        return new Response("$temp Fahrenheit is $celsius Celsius");
    }
}
