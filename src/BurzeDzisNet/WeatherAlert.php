<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

use ArrayIterator;
use IteratorAggregate;
use LogicException;
use OutOfBoundsException;

/**
 * WeatherAlert represents set of alerts.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
class WeatherAlert implements IteratorAggregate
{
    /**
     * Alerts.
     *
     * @var array Alerts
     */
    private $alerts;

    /**
     * Weather alerts.
     *
     * @var null|WeatherAlert Weather alert
     */
    private $weatherAlert;

    /**
     * WeatherAlert.
     *
     * @param null|WeatherAlert $alert set of alerts
     */
    public function __construct(self $alert = null)
    {
        $this->alerts = (null !== $alert) ? $alert->toArray() : [];
    }

    /**
     * Get WeatherAlert containing new alert.
     *
     * @param string $name  alert name
     * @param Alert  $alert
     *
     * @throws LogicException Alert exists
     *
     * @return WeatherAlert new instance of WeatherAlert containing specified alert
     */
    public function withAlert(string $name, Alert $alert): self
    {
        if (true === $this->hasAlert($name)) {
            throw new LogicException(\sprintf('Alert %s exists', $name));
        }
        $weatherAlert = clone $this;
        $weatherAlert->weatherAlert = $this;
        $weatherAlert->alerts = [$name => $alert];

        return $weatherAlert;
    }

    /**
     * Get alert by name.
     *
     * @param string $name alert name
     *
     * @throws OutOfBoundException there is no such an alert
     *
     * @return Alert alert
     */
    public function getAlert(string $name): Alert
    {
        $currentLink = $this;
        do {
            $alerts = $currentLink->alerts;
            if (true === isset($alerts[$name])) {
                return $alerts[$name];
            }
            $currentLink = $currentLink->weatherAlert;
        } while ($currentLink);

        throw new OutOfBoundsException(\sprintf("There is no such an alert like '%s'", $name));
    }

    /**
     * Iterates over alerts.
     *
     * @return ArrayIterator alert iterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->toArray());
    }

    /**
     * Get all alerts.
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
        } while (null !== $currentLink);

        return $alerts;
    }

    /**
     * Check if specified alert exists.
     *
     * @param string $name string alert name
     *
     * @return bool if specified alert exists return true; otherwise false
     */
    public function hasAlert(string $name): bool
    {
        $currentLink = $this;
        do {
            $alerts = $currentLink->alerts;
            if (true === isset($alerts[$name])) {
                return true;
            }
            $currentLink = $currentLink->weatherAlert;
        } while ($currentLink);

        return false;
    }
}
