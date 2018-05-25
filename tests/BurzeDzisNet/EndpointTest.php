<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

use PHPUnit\Framework\TestCase;

/**
 * {@see Endpoint} test.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @coversNothing
 */
class EndpointTest extends TestCase
{
    /**
     * @covers \Component\Remote\BurzeDzisNet\apiKey::apikey
     */
    public function testTestapiKey()
    {
        $endpoint = new Endpoint('MyApiKey');
        $this->assertSame('MyApiKey', $endpoint->apiKey());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Endpoint::wsdl
     */
    public function testWsdl()
    {
        $endpoint = new Endpoint('MyApiKey');
        $this->assertSame('https://burze.dzis.net/soap.php?WSDL', $endpoint->wsdl());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Endpoint::options
     */
    public function testOptions()
    {
        $endpoint = new Endpoint('MyApiKey');
        $this->assertSame([], $endpoint->options());
        $endpoint2 = new Endpoint('MyApiKey', ['option' => true]);
        $this->assertSame(['option' => true], $endpoint2->options());
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Endpoint::client
     */
    public function testClient()
    {
        $endpoint = new Endpoint('MyApiKey');
        $client = $endpoint->client();
        $client2 = $endpoint->client();
        $this->assertInstanceOf('SoapClient', $client);
        $this->assertNotSame($client, $client2);
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Endpoint::client
     */
    public function testClientInvalidWSDL()
    {
        $this->expectException(\SoapFault::class);

        $endpoint = $this->getMockBuilder('BurzeDzisNet\\Endpoint')
            ->disableOriginalConstructor()
            ->setMethods(['wsdl', 'options'])
            ->getMock();
        $endpoint->method('wsdl')->willReturn(\sprintf('%s%sInvalidExampleWSDL.xml', __DIR__, \DIRECTORY_SEPARATOR));
        $endpoint->method('options')->willReturn([]);
        $endpoint->client();
    }

    /**
     * @covers \Component\Remote\BurzeDzisNet\Endpoint::__construct
     */
    public function test__construct()
    {
        $endpoint = new Endpoint('MyApiKey');
        $this->assertSame('https://burze.dzis.net/soap.php?WSDL', $endpoint->wsdl());
        $this->assertSame('MyApiKey', $endpoint->apiKey());
    }
}
