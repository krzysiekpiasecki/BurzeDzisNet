<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare (strict_types = 1);

namespace KrzysiekPiasecki\BurzeDzisNet;

use PHPUnit_Framework_TestCase;

/**
 * {@see Alert} test
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
class AlertTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Alert::startDate
     */
    public function testStartDate()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame('2015-02-12', $alert->startDate());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Alert::endDate
     */
    public function testEndDate()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame('2015-02-18', $alert->endDate());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Alert::level
     */
    public function testLevel()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame(1, $alert->level());
    }

    /**
     * @covers KrzysiekPiasecki\BurzeDzisNet\Alert::__construct
     */
    public function test__construct()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame(1, $alert->level());
        $this->assertSame('2015-02-12', $alert->startDate());
        $this->assertSame('2015-02-18', $alert->endDate());
    }
}
