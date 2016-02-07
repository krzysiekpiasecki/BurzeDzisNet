<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare (strict_types = 1);

namespace KrzysiekPiasecki\BurzeDzisNet;

use PHPUnit_Framework_TestCase;

/**
 * {@see Storm} test.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
class StormTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Storm::lightnings
     */
    public function testLightnings()
    {
        $storm = new Storm(14, 80.72, 'NE', 10, 50);
        $this->assertSame(14, $storm->lightnings());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Storm::direction
     */
    public function testDirection()
    {
        $storm = new Storm(14, 80.72, 'NE', 10, 50);
        $this->assertSame('NE', $storm->direction());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Storm::distance
     */
    public function testDistance()
    {
        $storm = new Storm(14, 80.72, 'NE', 10, 50);
        $this->assertSame(80.72, $storm->distance());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Storm::timePeriod
     */
    public function testPeriod()
    {
        $storm = new Storm(14, 80.72, 'NE', 10, 50);
        $this->assertSame(10, $storm->period());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Storm::getRadius
     */
    public function testRadius()
    {
        $storm = new Storm(14, 80.72, 'NE', 10, 50);
        $this->assertSame(50, $storm->radius());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Storm::__construct
     */
    public function test__construct()
    {
        $storm = new Storm(14, 80.72, 'NE', 10, 50);
        $this->assertSame(14, $storm->lightnings());
        $this->assertSame('NE', $storm->direction());
        $this->assertSame(80.72, $storm->distance());
        $this->assertSame(10, $storm->period());
        $this->assertSame(50, $storm->radius());
    }
}
