<?php

declare(strict_types=1);

namespace BurzeDzisNet\Model;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \BurzeDzisNet\Storm
 */
class StormTest extends TestCase
{
    /**
     * @covers ::lightnings
     */
    public function testLightnings()
    {
        $storm = new Storm(14, 80.72, 'NE', 10);
        $this->assertSame(14, $storm->lightnings());
    }

    /**
     * @cover ::direction
     */
    public function testDirection()
    {
        $storm = new Storm(14, 80.72, 'NE', 10);
        $this->assertSame('NE', $storm->direction());
    }

    /**
     * @cover ::distance
     */
    public function testDistance()
    {
        $storm = new Storm(14, 80.72, 'NE', 10);
        $this->assertSame(80.72, $storm->distance());
    }

    /**
     * @cover ::timePeriod
     */
    public function testPeriod()
    {
        $storm = new Storm(14, 80.72, 'NE', 10);
        $this->assertSame(10, $storm->period());
    }

    /**
     * @cover ::__construct
     */
    public function test__construct()
    {
        $storm = new Storm(14, 80.72, 'NE', 10);
        $this->assertSame(14, $storm->lightnings());
        $this->assertSame('NE', $storm->direction());
        $this->assertSame(80.72, $storm->distance());
        $this->assertSame(10, $storm->period());
    }
}
