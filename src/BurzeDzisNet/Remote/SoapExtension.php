<?php

declare(strict_types=1);

namespace BurzeDzisNet\Remote;

class SoapExtension extends \SoapClient
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        parent::__construct(
            'https://burze.dzis.net/soap.php?WSDL'
        );
        $this->apiKey = $apiKey;
    }

    public function keyApi(): bool
    {
        return $this->__soapCall(
            'KeyAPI',
            [
                'klucz' => $this->apiKey,
            ]
        );
    }

    public function location(string $name): \stdClass
    {
        return $this->__soapCall(
            'miejscowosc',
            [
                'nazwa' => $name,
                'klucz' => $this->apiKey,
            ]
        );
    }

    public function weatherWarnings(float $y, float $x): \stdClass
    {
        return $this->__soapCall(
            'ostrzezenia_pogodowe',
            [
                'y' => $y,
                'x' => $x,
                'klucz' => $this->apiKey,
            ]
        );
    }

    public function findStorm(float $y, float $x, int $r): \stdClass
    {
        return $this->__soapCall(
            'szukaj_burzy',
            [
                'y' => $y,
                'x' => $x,
                'promien' => $r,
                'klucz' => $this->apiKey,
            ]
        );
    }

    public function locationList(string $name, string $country): string
    {
        return $this->__soapCall(
            'miejscowosci_lista',
            [
                'nazwa' => $name,
                'kraj' => $country,
                'klucz' => $this->apiKey,
            ]
        );
    }
}
