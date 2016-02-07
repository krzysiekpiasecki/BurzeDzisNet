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
 * Point represents the coordinates (DMS) for the specified locality according to the list of village
 * on the website
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
interface PointInterface
{
    /**
     * Get x
     *
     * @return float coordinate x
     */
    public function x(): float;

    /**
     * Get y
     *
     * @return float coordinate y
     */
    public function y(): float;
}
