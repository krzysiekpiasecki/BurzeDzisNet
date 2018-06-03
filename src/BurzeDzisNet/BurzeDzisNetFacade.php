<?php

declare(strict_types=1);

namespace BurzeDzisNet;

use BurzeDzisNet\Mappings\LocationListMapper;
use BurzeDzisNet\Mappings\LocationMapper;
use BurzeDzisNet\Mappings\StormMapper;
use BurzeDzisNet\Mappings\WeatherAlertMapper;
use BurzeDzisNet\Model\Location;
use BurzeDzisNet\Model\Storm;
use BurzeDzisNet\Model\WeatherAlert;
use BurzeDzisNet\Remote\SoapExtension;

class BurzeDzisNetFacade
{
    private $soap;

    public function __construct(string $apiKey)
    {
        $this->soap = new SoapExtension($apiKey);
    }

    public function getLocation(string $name): Location
    {
        return (new LocationMapper())
            ->mapToLocation(
                $this->soap->location($name)
            );
    }

    public function getStorm(Location $location, int $distance = 25): Storm
    {
        return (new StormMapper())
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

    public function getLocationNames(string $name, $country): array
    {
        return (new LocationListMapper())->mapToLocationList(
            $this->soap->locationsList(
                $name,
                $country
            )
        );
    }
}
