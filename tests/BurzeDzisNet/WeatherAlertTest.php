<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

use PHPUnit\Framework\TestCase;

/**
 * {@see WeatherAlert} test.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @coversNothing
 */
class WeatherAlertTest extends TestCase
{
    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::__construct
     */
    public function test__construct()
    {
        $alert = (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'))
            ->withAlert('wind', new Alert(2, '2015-02-12', '2015-02-13'));
        $alert2 = new WeatherAlert($alert);
        $this->assertTrue($alert2->hasAlert('storm'));
        $this->assertEquals(new Alert(1, '2015-02-12', '2015-02-13'), $alert2->getAlert('storm'));
        $this->assertTrue($alert2->hasAlert('wind'));
        $this->assertEquals(new Alert(2, '2015-02-12', '2015-02-13'), $alert2->getAlert('wind'));
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::withAlert
     */
    public function testWithAlert()
    {
        $alert = (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'));
        $this->assertEquals($alert->getAlert('storm'), new Alert(1, '2015-02-12', '2015-02-13'));
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::withAlert
     */
    public function testWithAlertOutOfBoundsException()
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Alert storm exists');

        (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'))
            ->withAlert('storm', new Alert(3, '2015-04-12', '2015-04-12'));
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::getAlert
     */
    public function testGetAlert()
    {
        $alert = (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'));
        $this->assertEquals($alert->getAlert('storm'), new Alert(1, '2015-02-12', '2015-02-13'));
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::getAlert
     */
    public function testGetAlertOutOfBoundsException()
    {
        $this->expectException(\OutOfBoundsException::class);
        $this->expectExceptionMessage('There is no such an alert like \'Storm\'');

        $alert = (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'));
        $alert->getAlert('Storm');
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::getIterator
     */
    public function testGetIterator()
    {
        $weatherAlert = (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'))
            ->withAlert('wind', new Alert(2, '2015-02-12', '2015-02-13'));
        $iteration = [];
        foreach ($weatherAlert as $name => $alert) {
            $iteration[$name] = $alert;
        }
        $this->assertEquals(
            ['storm' => new Alert(1, '2015-02-12', '2015-02-13'), 'wind' => new Alert(2, '2015-02-12', '2015-02-13')],
            $iteration
        );
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::toArray
     */
    public function testToArray()
    {
        $alert = (new WeatherAlert())
            ->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'))
            ->withAlert('wind', new Alert(2, '2015-02-12', '2015-02-13'));
        $this->assertEquals(
            ['storm' => new Alert(1, '2015-02-12', '2015-02-13'), 'wind' => new Alert(2, '2015-02-12', '2015-02-13')],
            $alert->toArray()
        );
        $alert2 = new WeatherAlert();
        $this->assertEquals([], $alert2->toArray());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\WeatherAlert::hasAlert
     */
    public function testHasAlert()
    {
        $alert = new WeatherAlert();
        $this->assertFalse($alert->hasAlert('storm'));
        $alert2 = $alert->withAlert('storm', new Alert(1, '2015-02-12', '2015-02-13'));
        $this->assertTrue($alert2->hasAlert('storm'));
        $alert3 = $alert2->withAlert('wind', new Alert(2, '2015-02-12', '2015-02-13'));
        $this->assertTrue($alert3->hasAlert('wind'));
        $this->assertTrue($alert3->hasAlert('storm'));
    }
}
