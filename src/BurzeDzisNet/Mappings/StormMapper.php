<?php

declare(strict_types=1);

namespace BurzeDzisNet\Mappings;

use BurzeDzisNet\Model\Storm;

class StormMapper
{
    public function mapToStorm(\stdClass $storm): Storm
    {
        return new Storm(
            $storm->liczba,
            $storm->odleglosc,
            $storm->kierunek,
            $storm->okres
        );
    }
}
