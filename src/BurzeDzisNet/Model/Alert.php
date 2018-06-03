<?php

declare(strict_types=1);

namespace BurzeDzisNet\Model;

/**
 * Weather alert.
 *
 * <strong>Only the Polish area</strong>
 *
 * @see https://burze.dzis.net/?page=severe_weather_alert_map_poland Alert scale
 */
class Alert
{
    /**
     * Alert level.
     *
     * @var int alert level
     */
    private $level = 0;

    /**
     * Start day.
     *
     * @var string start day
     */
    private $start = '';

    /**
     * End day.
     *
     * @var string end day
     */
    private $end = '';

    /**
     * Weather alert.
     *
     * @param int    $level alert level
     * @param string $start start day
     * @param string $end   end day
     */
    public function __construct(int $level, string $start, string $end)
    {
        $this->level = $level;
        $this->start = $start;
        $this->end = $end;
    }

    public static function emptyAlert(): self
    {
        static $alert = null;
        if (null === $alert) {
            $alert = new self(0, '', '');
        }

        return $alert;
    }

    /**
     * Get alert level.
     *
     * @see https://burze.dzis.net/?page=mapa_ostrzezen Alert scale
     *
     * @return int alert level
     */
    public function level(): int
    {
        return $this->level;
    }

    /**
     * Get start day.
     *
     * @return string start day
     */
    public function startDate(): string
    {
        return $this->start;
    }

    /**
     * Get end day.
     *
     * @return string end day
     */
    public function endDate(): string
    {
        return $this->end;
    }
}
