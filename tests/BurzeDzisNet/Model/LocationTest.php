<?php

declare(strict_types=1);

namespace BurzeDzisNet\Model;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \BurzeDzisNet\Location
 */
class LocationTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::x
     * @covers ::y
     */
    public function test__construct()
    {
        $point = new Location(17.02, 51.07);
        $this->assertSame(17.02, $point->y());
        $this->assertSame(51.07, $point->x());
    }

    /**
     * @covers ::equals
     */
    public function testEquals()
    {
        $point = new Location(17.02, 51.07);
        $point2 = new Location(17.02, 51.07);
        $point3 = new Location(51.07, 17.02);
        $this->assertTrue($point->equals($point));
        $this->assertTrue($point->equals($point2));
        $this->assertTrue($point2->equals($point));
        $this->assertFalse($point->equals($point3));
        $this->assertFalse($point2->equals($point3));
    }
}
