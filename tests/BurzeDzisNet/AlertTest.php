<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

use PHPUnit\Framework\TestCase;

/**
 * {@see Alert} test.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @coversNothing
 */
class AlertTest extends TestCase
{
    /**
     * @covers \Component\Remote\BurzeDzisNet\Alert::startDate
     */
    public function testStartDate()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame('2015-02-12', $alert->startDate());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Alert::endDate
     */
    public function testEndDate()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame('2015-02-18', $alert->endDate());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Alert::level
     */
    public function testLevel()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame(1, $alert->level());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Alert::__construct
     */
    public function test__construct()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame(1, $alert->level());
        $this->assertSame('2015-02-12', $alert->startDate());
        $this->assertSame('2015-02-18', $alert->endDate());
    }
}
