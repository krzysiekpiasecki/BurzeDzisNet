<?php

declare(strict_types=1);

namespace BurzeDzisNet;

class LocationDataMapper
{
    public function mapToLocation(\stdClass $location): Location
    {
        return new Location(
            $location->y,
            $location->x
        );
    }
}
