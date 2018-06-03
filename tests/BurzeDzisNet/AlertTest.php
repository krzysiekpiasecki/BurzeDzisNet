<?php

declare(strict_types=1);

namespace BurzeDzisNet;

use PHPUnit\Framework\TestCase;

/**
 * @covers \BurzeDzisNet\Alert
 */
class AlertTest extends TestCase
{
    /**
     * @covers ::emptyAlert
     */
    public function testEmptyAlert()
    {
        $alert = Alert::emptyAlert();
        $this->assertSame(
            0,
            $alert->level(),
            'Expected that the level of empty Alert will be 0'
        );
        $this->assertSame(
            '',
            $alert->startDate(),
            "Expected that the start date of empty Alert will be ''"
        );
        $this->assertSame(
            '',
            $alert->endDate(),
            "Expected that the end date of empty Alert will be ''"
        );
        $alert2 = Alert::emptyAlert();
        $this->assertSame(
            $alert,
            $alert2,
            'expected thatt emptyAlert will always return the same instance'
        );
    }

    /**
     * @covers ::startDate
     */
    public function testStartDate()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame('2015-02-12', $alert->startDate());
    }

    /**
     * @covers ::endDate
     */
    public function testEndDate()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame('2015-02-18', $alert->endDate());
    }

    /**
     * @covers ::level
     */
    public function testLevel()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame(1, $alert->level());
    }

    /**
     * @covers ::__construct
     */
    public function test__construct()
    {
        $alert = new Alert(1, '2015-02-12', '2015-02-18');
        $this->assertSame(1, $alert->level());
        $this->assertSame('2015-02-12', $alert->startDate());
        $this->assertSame('2015-02-18', $alert->endDate());
    }
}
