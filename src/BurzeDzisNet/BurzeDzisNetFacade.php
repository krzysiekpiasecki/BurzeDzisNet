<?php

declare(strict_types=1);

namespace BurzeDzisNet;

class BurzeDzisNetFacade
{
    private $soap;

    public function __construct(string $apiKey)
    {
        $this->soap = new SoapExtension($apiKey);
    }

    public function getLocation(string $name): Location
    {
        return (new LocationDataMapper())
            ->mapToLocation(
                $this->soap->location($name)
            );
    }

    public function getStorm(Location $location, int $distance = 25): Storm
    {
        return (new StormDataMapper())
            ->mapToStorm(
                $this->soap->findStorm(
                    $location->y(),
                    $location->x(),
                    $distance
                )
            );
    }

    public function getWeatherAlert(Location $location): WeatherAlert
    {
        return (new WeatherAlertMapper())
            ->mapToWeatherAlert(
                $this->soap->weatherWarnings(
                    $location->y(),
                    $location->x()
                )
            );
    }
}
