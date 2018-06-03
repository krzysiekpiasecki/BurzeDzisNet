<?php

declare(strict_types=1);

namespace BurzeDzisNet\Model;

use PHPUnit\Framework\TestCase;

/**
 * @covers \BurzeDzisNet\WeatherAlert
 */
class WeatherAlertTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::wind
     * @covers ::heat
     * @covers ::precipitation
     * @covers ::tornado
     * @covers ::storm
     * @covers ::frost
     */
    public function testConstructor()
    {
        $wind = new Alert(1, '2015-02-12', '2015-02-18');
        $heat = new Alert(1, '2015-02-12', '2015-02-18');
        $precipitation = new Alert(1, '2015-02-12', '2015-02-18');
        $tornado = new Alert(1, '2015-02-12', '2015-02-18');
        $storm = new Alert(1, '2015-02-12', '2015-02-18');
        $frost = new Alert(1, '2015-02-12', '2015-02-18');

        $weatherAlert = new WeatherAlert(
            [
                'wind' => $wind,
                'heat' => $heat,
                'precipitation' => $precipitation,
                'tornado' => $tornado,
                'storm' => $storm,
                'frost' => $frost,
            ]
        );

        $this->assertSame(
            $wind,
            $weatherAlert->wind(),
            'Expected wind alert to be the same instance as in constructor'
        );

        $this->assertSame(
            $heat,
            $weatherAlert->heat(),
            'Expected heat alert to be the same instance as in constructor'
        );

        $this->assertSame(
            $precipitation,
            $weatherAlert->precipitation(),
            'Expected precipitation alert to be the same instance as in constructor'
        );

        $this->assertSame(
            $tornado,
            $weatherAlert->tornado(),
            'Expected tornado alert to be the same instance as in constructor'
        );

        $this->assertSame(
            $storm,
            $weatherAlert->storm(),
            'Expected storm alert to be the same instance as in constructor'
        );

        $this->assertSame(
            $frost,
            $weatherAlert->frost(),
            'Expected frost alert to be the same instance as in constructor'
        );
    }

    public function testWarning()
    {
        $wind = new Alert(1, '2015-02-12', '2015-02-18');

        $weatherAlert = new WeatherAlert(
            [
                'wind' => $wind,
            ]
        );

        $this->assertTrue(
            $weatherAlert->warning(),
            'Expected warning when alert has been set'
        );
    }

    public function testNoWarning()
    {
        $weatherAlert = new WeatherAlert();

        $this->assertFalse(
            $weatherAlert->warning(),
            'Expected no warning when empty alert'
        );
    }
}
