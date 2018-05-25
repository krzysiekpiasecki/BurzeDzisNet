<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

/**
 * Storm represents information about registered lightnings with a specified radius of monitoring
 * covered by the specified location.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
interface StormInterface
{
    /**
     * Get the number of cloud-end-ground lightning in specified radius for a selected location.
     *
     * @return int number of cloud-end-ground lightning in specified radius for a selected location
     */
    public function lightnings(): int;

    /**
     * Get the distance to the nearest registered lightning.
     *
     * @return float distance to the nearest registered lightning
     */
    public function distance(): float;

    /**
     * Get direction to the nearest lightning (E, E, N, NW, W, SW, S, SE).
     *
     * @return string direction to the nearest lightning
     */
    public function direction(): string;

    /**
     * Get the number of minutes of time containing the data (10, 15, 20 minutes).
     *
     * @return int number of minutes of time containing the data
     */
    public function period(): int;

    /**
     * Get radius covered by specified location.
     *
     * @return int radius covered by location
     */
    public function radius(): int;
}
