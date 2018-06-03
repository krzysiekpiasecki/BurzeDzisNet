<?php

declare(strict_types=1);

namespace BurzeDzisNet\Mappings;

class LocationListMapper
{
    public function mapToLocationList(string $locationsList): array
    {
        return (json_decode($locationsList))[1];
    }
}
