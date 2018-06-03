<?php

declare(strict_types=1);

namespace BurzeDzisNet\Model;

/**
 * Location represents the coordinates (DMS) for the specified locality according to the list of village
 * on the website.
 */
class Location
{
    /**
     * Coordinate-X.
     *
     * @var float Coordinate-X
     */
    private $x;

    /**
     * Coordinate-Y.
     *
     * @var float Coordinate-Y
     */
    private $y;

    /**
     * New Location representing the coordinates (DMS) for the specified locality.
     *
     * @param float $y Coordinate-Y
     * @param float $x Coordinate-X
     */
    public function __construct(float $y, float $x)
    {
        $this->y = $y;
        $this->x = $x;
    }

    /**
     * Get Coordinate-X.
     *
     * @return float Coordinate-X
     */
    public function x(): float
    {
        return $this->x;
    }

    /**
     * Get Coordinate-Y.
     *
     * @return float Coordinate-Y
     */
    public function y(): float
    {
        return $this->y;
    }

    /**
     * Indicates whether some other Location is equal to this one.
     *
     * @param Location $location Other Location
     *
     * @return bool True if this Location is the equal to some other Location; false otherwise
     */
    public function equals(Location $location): bool
    {
        return $this->x === $location->x() && $this->y === $location->y();
    }
}
