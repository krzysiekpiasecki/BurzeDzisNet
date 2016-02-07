<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare (
    strict_types = 1
);

namespace KrzysiekPiasecki\BurzeDzisNet;

/**
 * BurzeDzisNetInterface represents remote interface
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
interface BurzeDzisNetInterface
{
    /**
     * Indicates whether given API key is valid
     *
     * @param string $apiKey API key
     * @return bool true if API key is valid; otherwise false
     * @throws \SoapFault soap error
     */
    public function verifyApiKey(string $apiKey): bool;

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
    public function locate(string $name): Point;

    /**
     * Get information about storm for the given locality and monitoring radius
     *
     * @see Storm
     * @param Point $point  monitored location
     * @param int   $radius radius of monitoring
     * @return Storm information about registered lightnings and more
     * @throws \SoapFault soap error
     */
    public function getStorm(Point $point, int $radius): Storm;

    /**
     * Get set of weather alerts for the given Point
     *
     * <strong>Only Polish area</strong>
     * @param Point $point location coordinates
     * @return WeatherAlert set of weather alerts
     */
    public function getWeatherAlert(Point $point): WeatherAlert;
}
