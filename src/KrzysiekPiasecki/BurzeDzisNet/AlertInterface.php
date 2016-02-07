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
 * Weather alert
 *
 * <strong>Only the Polish area</strong>
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
interface AlertInterface
{
    /**
     * Get alert level
     *
     * @see https://burze.dzis.net/?page=mapa_ostrzezen Alert scale
     * @return int alert level
     */
    public function level(): int;

    /**
     * Get start day
     *
     * @return string start day
     */
    public function startDate(): string;

    /**
     * Get end day
     *
     * @return string end day
     */
    public function endDate(): string;
}
