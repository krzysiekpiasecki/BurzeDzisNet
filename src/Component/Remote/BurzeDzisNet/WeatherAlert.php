<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare (
    strict_types = 1
);

namespace Component\Remote\BurzeDzisNet;

use OutOfBoundsException;
use LogicException;
use IteratorAggregate;
use ArrayIterator;

/**
 * WeatherAlert represents set of alerts
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
class WeatherAlert implements IteratorAggregate, WeatherAlertInterface
{
    /**
     * Alerts
     *
     * @var array Alerts
     */
    private $alerts;

    /**
     * Weather alerts
     *
     * @var WeatherAlert|null Weather alert
     */
    private $weatherAlert = null;

    /**
     * WeatherAlert
     *
     * @param WeatherAlert|null $alert set of alerts
     */
    public function __construct(WeatherAlert $alert = null)
    {
        $this->alerts = ($alert != null) ? $alert->toArray() :  [];
    }

    /**
     * Get WeatherAlert containing new alert
     *
     * @param string $name  alert name
     * @param Alert  $alert
     * @return WeatherAlert new instance of WeatherAlert containing specified alert
     * @throws LogicException Alert exists
     */
    public function withAlert(string $name, Alert $alert): WeatherAlert
    {
        if ($this->hasAlert($name) === true) {
            throw new LogicException(\sprintf('Alert %s exists', $name));
        }
        $weatherAlert = clone $this;
        $weatherAlert->weatherAlert = $this;
        $weatherAlert->alerts = [$name => $alert];
        return $weatherAlert;
    }

    /**
     * Get alert by name
     *
     * @param string $name alert name
     * @return Alert alert
     * @throws OutOfBoundException there is no such an alert
     */
    public function getAlert(string $name): Alert
    {
        $currentLink = $this;
        do {
            $alerts = $currentLink->alerts;
            if (isset($alerts[$name]) == true) {
                return $alerts[$name];
            }
            $currentLink = $currentLink->weatherAlert;
        } while ($currentLink);
        throw new OutOfBoundsException(\sprintf("There is no such an alert like '%s'", $name));
    }

    /**
     * Iterates over alerts
     *
     * @return ArrayIterator alert iterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->toArray());
    }

    /**
     * Get all alerts
     *
     * @return array all alerts
     */
    public function toArray(): array
    {
        $alerts = [];
        $currentLink = $this;
        do {
            foreach ($currentLink->alerts as $name => $alert) {
                $alerts[$name] = $alert;
            }
            $currentLink = $currentLink->weatherAlert;
        } while ($currentLink != null);
        return $alerts;
    }

    /**
     * Check if specified alert exists
     *
     * @param string $name string alert name
     * @return bool if specified alert exists return true; otherwise false
     */
    public function hasAlert(string $name): bool
    {
        $currentLink = $this;
        do {
            $alerts = $currentLink->alerts;
            if (isset($alerts[$name]) == true) {
                return true;
            }
            $currentLink = $currentLink->weatherAlert;
        } while ($currentLink);
        return false;
    }
}
