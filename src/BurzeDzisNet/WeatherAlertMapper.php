<?php

declare(strict_types=1);

namespace BurzeDzisNet;

class WeatherAlertMapper
{
    public function mapToWeatherAlert(\stdClass $weatherAlert): WeatherAlert
    {
        return new WeatherAlert(
            [
                'frost' => new Alert(
                    $weatherAlert->mroz,
                    $weatherAlert->mroz_od_dnia,
                    $weatherAlert->mroz_do_dnia
                ),
                'heat' => new Alert(
                    $weatherAlert->upal,
                    $weatherAlert->upal_od_dnia,
                    $weatherAlert->upal_do_dnia
                ),
                'wind' => new Alert(
                    $weatherAlert->wiatr,
                    $weatherAlert->wiatr_od_dnia,
                    $weatherAlert->wiatr_do_dnia
                ),
                'precipitation' => new Alert(
                    $weatherAlert->opad,
                    $weatherAlert->opad_od_dnia,
                    $weatherAlert->opad_do_dnia
                ),
                'storm' => new Alert(
                    $weatherAlert->burza,
                    $weatherAlert->burza_od_dnia,
                    $weatherAlert->burza_do_dnia
                ),
                'tornado' => new Alert(
                    $weatherAlert->traba,
                    $weatherAlert->traba_od_dnia,
                    $weatherAlert->traba_do_dnia
                ),
            ]
        );
    }
}
