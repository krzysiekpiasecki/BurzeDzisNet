<?php

declare(strict_types=1);

namespace BurzeDzisNet\Mappings;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \BurzeDzisNet\Mappings\LocationMapper
 */
class LocationMapperTest extends TestCase
{
    /**
     * @covers ::mapToLocation()
     */
    public function testMapToLocation()
    {
        $location = (new LocationMapper())->mapToLocation(
            (object) [
                'y' => 17.02,
                'x' => 51.07,
            ]
        );

        $this->assertSame(
            17.02,
            $location->y(),
            sprintf('Expected Coordinate-Y to be %f, but was %f', 17.02, $location->y())
        );

        $this->assertSame(
            51.07,
            $location->x(),
            sprintf('Expected Coordinate-X to be %f, but was %f', 51.07, $location->x())
        );
    }
}
