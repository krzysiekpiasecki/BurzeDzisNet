<?php

declare(strict_types=1);

namespace BurzeDzisNet\Model;

class WeatherAlert
{
    private $frost;
    private $wind;
    private $heat;
    private $precipitation;
    private $storm;
    private $tornado;

    public function __construct(array $alerts = [])
    {
        $this->frost = $alerts['frost'] ?? Alert::emptyAlert();
        $this->wind = $alerts['wind'] ?? Alert::emptyAlert();
        $this->heat = $alerts['heat'] ?? Alert::emptyAlert();
        $this->precipitation = $alerts['precipitation'] ?? Alert::emptyAlert();
        $this->storm = $alerts['storm'] ?? Alert::emptyAlert();
        $this->tornado = $alerts['tornado'] ?? Alert::emptyAlert();
    }

    public function frost(): Alert
    {
        return $this->frost;
    }

    public function wind(): Alert
    {
        return $this->wind;
    }

    public function heat(): Alert
    {
        return $this->heat;
    }

    public function precipitation(): Alert
    {
        return $this->precipitation;
    }

    public function storm(): Alert
    {
        return $this->storm;
    }

    public function tornado(): Alert
    {
        return $this->tornado;
    }

    public function warning(): bool
    {
        return $this->levelSum() > 0;
    }

    private function levelSum(): int
    {
        return
            $this->frost->level() +
            $this->wind->level() +
            $this->precipitation->level() +
            $this->heat->level() +
            $this->storm->level() +
            $this->tornado->level();
    }
}
