<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

use PHPUnit\Framework\TestCase;

/**
 * {@see Point} test.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @coversNothing
 */
class PointTest extends TestCase
{
    /**
     * @covers \Component\Remote\BurzeDzisNet\Point::x
     */
    public function testX()
    {
        $point = new Point(17.02, 51.07);
        $this->assertSame(17.02, $point->x());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Point::y
     */
    public function testY()
    {
        $point = new Point(17.02, 51.07);
        $this->assertSame(51.07, $point->y());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Point::__construct
     */
    public function test__construct()
    {
        $point = new Point(17.02, 51.07);
        $this->assertSame(17.02, $point->x());
        $this->assertSame(51.07, $point->y());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Point::equals
     */
    public function testEquals()
    {
        $point = new Point(17.02, 51.07);
        $point2 = new Point(17.02, 51.07);
        $point3 = new Point(51.07, 17.02);
        $this->assertTrue($point->equals($point));
        $this->assertTrue($point->equals($point2));
        $this->assertFalse($point->equals($point3));
        $this->assertFalse($point2->equals($point3));
    }
}
