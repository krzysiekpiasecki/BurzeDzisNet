<?php

declare(strict_types=1);

namespace BurzeDzisNet\Mappings;

use BurzeDzisNet\Model\Location;

class LocationMapper
{
    public function mapToLocation(\stdClass $location): Location
    {
        return new Location(
            $location->y,
            $location->x
        );
    }
}
