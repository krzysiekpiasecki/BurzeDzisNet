<?php

declare(strict_types=1);

namespace BurzeDzisNet;

use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Test for {@see BurzeDzisNetSoapExtension}.
 *
 * @coversDefaultClass \BurzeDzisNet\SoapExtension
 */
class SoapExtensionTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $soapExt = new SoapExtension('91F034E2F66C560D7CA0A7DA957939FD');
        $soapExtClass = new ReflectionClass($soapExt);
        $apiKeyProp = $soapExtClass->getProperty('apiKey');
        $apiKeyProp->setAccessible(true);
        $this->assertSame(
            $apiKeyProp->getValue($soapExt),
            '91F034E2F66C560D7CA0A7DA957939FD'
        );
    }

    /**
     * @covers ::keyApi
     */
    public function testKeyApi()
    {
        $soapExtMock = $this->getMockBuilder(SoapExtension::class)
            ->setConstructorArgs(['91F034E2F66C560D7CA0A7DA957939FD'])
            ->setMethods(['__soapCall'])
            ->getMock();

        $soapExtMock->method('__soapCall')->willReturn(false);

        $soapExtMock
            ->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('KeyAPI'),
                $this->equalTo(['klucz' => '91F034E2F66C560D7CA0A7DA957939FD']),
                $this->isNull(),
                $this->isNull(),
                $this->isNull()
            );

        $soapExtMock->keyApi();
    }

    /**
     * @covers ::location
     */
    public function testLocation()
    {
        $soapExtMock = $this->getMockBuilder(SoapExtension::class)
            ->setConstructorArgs(['91F034E2F66C560D7CA0A7DA957939FD'])
            ->setMethods(['__soapCall'])
            ->getMock();

        $soapExtMock->method('__soapCall')->willReturn(new \stdClass());

        $soapExtMock
            ->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('miejscowosc'),
                $this->equalTo([
                    'nazwa' => 'Wrocław',
                    'klucz' => '91F034E2F66C560D7CA0A7DA957939FD',
                ]),
                $this->isNull(),
                $this->isNull(),
                $this->isNull()
            );

        $soapExtMock->location('Wrocław');
    }

    /**
     * @covers ::findStorm
     */
    public function testFindStorm()
    {
        $soapExtMock = $this->getMockBuilder(SoapExtension::class)
            ->setConstructorArgs(['91F034E2F66C560D7CA0A7DA957939FD'])
            ->setMethods(['__soapCall'])
            ->getMock();

        $soapExtMock->method('__soapCall')->willReturn(new \stdClass());

        $soapExtMock
            ->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('szukaj_burzy'),
                $this->equalTo([
                    'y' => '51.12',
                    'x' => '17.02',
                    'promien' => 50,
                    'klucz' => '91F034E2F66C560D7CA0A7DA957939FD',
                ]),
                $this->isNull(),
                $this->isNull(),
                $this->isNull()
            );

        $soapExtMock->findStorm(51.12, 17.02, 50);
    }

    /**
     * @covers ::locationList
     */
    public function testLocationList()
    {
        $soapExtMock = $this->getMockBuilder(SoapExtension::class)
            ->setConstructorArgs(['91F034E2F66C560D7CA0A7DA957939FD'])
            ->setMethods(['__soapCall'])
            ->getMock();

        $soapExtMock->method('__soapCall')->willReturn('');

        $soapExtMock
            ->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('miejscowosci_lista'),
                $this->equalTo([
                    'nazwa' => 'Wro',
                    'kraj' => 'PL',
                    'klucz' => '91F034E2F66C560D7CA0A7DA957939FD',
                ]),
                $this->isNull(),
                $this->isNull(),
                $this->isNull()
            );

        $soapExtMock->locationList('Wro', 'PL');
    }

    /**
     * @covers ::weatherWarnings
     */
    public function weatherWarnings()
    {
        $soapExtMock = $this->getMockBuilder(SoapExtension::class)
            ->setConstructorArgs(['91F034E2F66C560D7CA0A7DA957939FD'])
            ->setMethods(['__soapCall'])
            ->getMock();

        $soapExtMock->method('__soapCall')->willReturn(new \stdClass());

        $soapExtMock
            ->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('ostrzezenia_pogodowe'),
                $this->equalTo([
                    'y' => '51.12',
                    'x' => '17.02',
                    'klucz' => '91F034E2F66C560D7CA0A7DA957939FD',
                ]),
                $this->isNull(),
                $this->isNull(),
                $this->isNull()
            );

        $soapExtMock->weatherWarnings(51.12, 17.02);
    }
}
