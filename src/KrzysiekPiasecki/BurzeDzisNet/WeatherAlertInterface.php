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
 * WeatherAlertInterface represents set of alerts
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
interface WeatherAlertInterface
{
    /**
     * Get alert by name
     *
     * @param string $name alert name
     * @return Alert alert
     * @throws OutOfBoundException there is no such an alert
     */
    public function getAlert(string $name): Alert;

    /**
     * Check if specified alert exists
     *
     * @param string $name string alert name
     * @return bool if specified alert exists return true; otherwise false
     */
    public function hasAlert(string $name): bool;
}
