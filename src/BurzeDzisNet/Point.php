<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

/**
 * Point represents the coordinates (DMS) for the specified locality according to the list of village
 * on the website.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
class Point implements PointInterface
{
    /**
     * Coordinate x.
     *
     * @var float coordinate X
     */
    private $x;

    /**
     * Coordinate y.
     *
     * @var float coordinate y
     */
    private $y;

    /**
     * Point.
     *
     * @param float $x coordinate x
     * @param float $y coordinate y
     */
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Get x.
     *
     * @return float coordinate x
     */
    public function x(): float
    {
        return $this->x;
    }

    /**
     * Get y.
     *
     * @return float coordinate y
     */
    public function y(): float
    {
        return $this->y;
    }

    /**
     * Indicates whether some other Point is equal to this one.
     *
     * @param PointInterface $point other Point
     *
     * @return bool true if this Point is the equal to some other Point; false otherwise
     */
    public function equals(PointInterface $point): bool
    {
        return ($this->x() === $point->x()) && ($this->y() === $point->y());
    }
}
