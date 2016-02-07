<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare (
    strict_types = 1
);

namespace Component\Remote\BurzeDzisNet;

/**
 * BurzeDzisNetInterface represents remote client
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
class BurzeDzisNet implements BurzeDzisNetInterface
{
    /**
     * Soap client
     *
     * @var \SoapClient Soap client
     */
    private $client = null;

    /**
     * API key
     *
     * @var string API key
     */
    private $apiKey = null;

    /**
     * Remote client
     *
     * @param EndpointInterface $endpoint entry point to burze.dzis.net
     */
    public function __construct(EndpointInterface $endpoint)
    {
        $this->client = $endpoint->client();
        $this->apiKey = $endpoint->apiKey();
    }

    /**
     * Indicates whether given API key is valid
     *
     * @param string $apiKey API key
     * @return bool true if API key is valid; otherwise false
     * @throws \SoapFault soap error
     */
    public function verifyApiKey(string $apiKey): bool
    {
        return $this->client->KeyApi($apiKey);
    }

    /**
     * Get Point representing location coordinates
     *
     * If no location returns Point with coordinates [0,0].
     *
     * @see Point
     * @param string $name location name
     * @return Point location coordinates
     * @throws \SoapFault soap error
     */
    public function locate(string $name): Point
    {
        $dto = $this->client->miejscowosc($name, $this->apiKey);
        return new Point(
            $dto->x,
            $dto->y
        );
    }

    /**
     * Get information about storm for the given locality and monitoring radius
     *
     * @see Storm
     * @param Point $point  monitored location
     * @param int   $radius radius of monitoring
     * @return Storm information about registered lightnings and more
     * @throws \SoapFault soap error
     */
    public function getStorm(Point $point, int $radius = 25): Storm
    {
        $dto = $this->client->szukaj_burzy(
            $point->y(),
            $point->x(),
            $radius,
            $this->apiKey
        );
        return new Storm(
            $dto->liczba,
            $dto->odleglosc,
            $dto->kierunek,
            $dto->okres,
            $radius
        );
    }

    /**
     * Get set of weather alerts for the given Point
     *
     * <strong>Only Polish area</strong>
     * @param Point $point location coordinates
     * @return WeatherAlert set of weather alerts
     */
    public function getWeatherAlert(Point $point): WeatherAlert
    {
        $dto = $this->client->ostrzezenia_pogodowe(
            $point->y(),
            $point->x(),
            $this->apiKey
        );
        return (new WeatherAlert())
            ->withAlert(
                'frost',
                new Alert(
                    $dto->mroz,
                    $dto->mroz_od_dnia,
                    $dto->mroz_do_dnia
                )
            )->withAlert(
                'heat',
                new Alert(
                    $dto->upal,
                    $dto->upal_od_dnia,
                    $dto->upal_do_dnia
                )
            )->withAlert(
                'wind',
                new Alert(
                    $dto->wiatr,
                    $dto->wiatr_od_dnia,
                    $dto->wiatr_do_dnia
                )
            )->withAlert(
                'storm',
                new Alert(
                    $dto->burza,
                    $dto->burza_od_dnia,
                    $dto->burza_do_dnia
                )
            )->withAlert(
                'tornado',
                new Alert(
                    $dto->traba,
                    $dto->traba_od_dnia,
                    $dto->traba_do_dnia
                )
            )->withAlert(
                'precipitation',
                new Alert(
                    $dto->opad,
                    $dto->opad_od_dnia,
                    $dto->opad_do_dnia
                )
            );
    }
}
