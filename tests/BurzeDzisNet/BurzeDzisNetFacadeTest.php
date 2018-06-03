<?php

declare(strict_types=1);

namespace BurzeDzisNet;

use BurzeDzisNet\Model\Location;
use BurzeDzisNet\Remote\SoapExtension;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \BurzeDzisNet\BurzeDzisNetFacade
 */
class BurzeDzisNetFacadeTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $bdn = new BurzeDzisNetFacade('91F034E2F66C560D7CA0A7DA957939FD');
        $bdnClass = new \ReflectionClass($bdn);
        $soapExtProp = $bdnClass->getProperty('soap');
        $soapExtProp->setAccessible(true);
        $soapExt = $soapExtProp->getValue($bdn);
        $soapExtClass = new \ReflectionClass($soapExt);
        $apiKeyProp = $soapExtClass->getProperty('apiKey');
        $apiKeyProp->setAccessible(true);
        $this->assertSame(
            '91F034E2F66C560D7CA0A7DA957939FD',
            $apiKeyProp->getValue($soapExt),
            sprintf(
            'Expected api key to be %s, but was %s',
              '91F034E2F66C560D7CA0A7DA957939FD',
                    $apiKeyProp->getValue($soapExt)
            )
        );
    }

    /**
     * @covers ::getLocation
     */
    public function testGetLocation()
    {
        $soapMock = $this->createMock(SoapExtension::class);
        $soapMock->method('location')->willReturn((object) ['y' => 51.02, 'x' => 17.22]);

        $bdn = $this->createFacadeInjectMock($soapMock);

        $location = $bdn->getLocation('Wrocław');

        $this->assertSame(
            51.02,
            $location->y(),
            sprintf(
                'Expected Coordinate-Y of location to be %f, but was %f',
                '51.02',
                $location->y()
            )
        );

        $this->assertSame(
            17.22,
            $location->x(),
            sprintf(
                'Expected Coordinate-X of location to be %f, but was %f',
                '17.22',
                $location->x()
            )
        );
    }

    /**
     * @covers ::getStorm
     */
    public function testGetStorm()
    {
        $soapMock = $this->createMock(SoapExtension::class);
        $soapMock->method('findStorm')->willReturn((object) [
            'liczba' => 14,
            'odleglosc' => 80.72,
            'kierunek' => 'NE',
            'okres' => 10,
        ]);

        $bdn = $this->createFacadeInjectMock($soapMock);

        $storm = $bdn->getStorm(new Location(51.02, 17.11), 100);

        $this->assertSame(
            14,
            $storm->lightnings(),
            sprintf('Expected number of lightnings to be %d, but was %d', 14, $storm->lightnings())
        );

        $this->assertSame(
            80.72,
            $storm->distance(),
            sprintf('Expected distance to be %f, but was %f', 80.72, $storm->distance())
        );

        $this->assertSame(
            'NE',
            $storm->direction(),
            sprintf('Expected direction to be %s, but was %s', 'NE', $storm->direction())
        );

        $this->assertSame(
            10,
            $storm->period(),
            sprintf('Expected period to be %d, but was %d', 10, $storm->period())
        );
    }

    /**
     * @covers ::getWeatherAlert
     */
    public function testGetWeatherAleart()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    private function createFacadeInjectMock(SoapExtension $soapMock): BurzeDzisNetFacade
    {
        $bdn = new BurzeDzisNetFacade('91F034E2F66C560D7CA0A7DA957939FD');
        $bdnClass = new \ReflectionClass($bdn);
        $soapExtProp = $bdnClass->getProperty('soap');
        $soapExtProp->setAccessible(true);
        $soapExtProp->setValue($bdn, $soapMock);

        return $bdn;
    }
}
