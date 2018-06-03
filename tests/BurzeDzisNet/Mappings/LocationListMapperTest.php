<?php

declare(strict_types=1);

namespace BurzeDzisNet\Mappings;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \BurzeDzisNet\Mappings\LocationListMapper
 */
class LocationListMapperTest extends TestCase
{
    /**
     * @covers ::mapToLocationList
     */
    public function testMapToLocationList()
    {
        $locationList = (new LocationListMapper())->mapToLocationList(
            '["Wro",["Wróbel (woj. Warmińsko-Mazurskie)", "Wróble-Arciszewo", "Wróblew", "Wróblik Szlachecki", "Wróblin", "Wróblowice (woj. Dolnośląskie)", "Wróblowice (woj. Małopolskie)", "Wróblówka", "Wrocanka (pow. Jasielski)", "Wrocanka (pow. Krośnieński)", "Wroceń", "Wrociszew", "Wrociszów", "Wrocki", "Wrocław", "Wrocław Fabryczna", "Wrocław Krzyki", "Wrocław Psie Pole", "Wrocław Śródmieście", "Wrocław Stare Miasto", "Wronczyn (gm. Stęszew)", "Wroniawy (woj. Łódzkie)", "Wroniawy (woj. Wielkopolskie)", "Wronie", "Wronin (woj. Małopolskie)", "Wronin (woj. Opolskie)", "Wroniniec", "Wronki", "Wronów (woj. Świętokrzyskie)", "Wronowice (woj. Lubelskie)", "Wronowice (woj. Łódzkie)", "Wronowice (woj. Małopolskie)", "Wronowy", "Wrotków"]]'
        );

        $this->assertSame(
            json_decode('["Wróbel (woj. Warmińsko-Mazurskie)", "Wróble-Arciszewo", "Wróblew", "Wróblik Szlachecki", "Wróblin", "Wróblowice (woj. Dolnośląskie)", "Wróblowice (woj. Małopolskie)", "Wróblówka", "Wrocanka (pow. Jasielski)", "Wrocanka (pow. Krośnieński)", "Wroceń", "Wrociszew", "Wrociszów", "Wrocki", "Wrocław", "Wrocław Fabryczna", "Wrocław Krzyki", "Wrocław Psie Pole", "Wrocław Śródmieście", "Wrocław Stare Miasto", "Wronczyn (gm. Stęszew)", "Wroniawy (woj. Łódzkie)", "Wroniawy (woj. Wielkopolskie)", "Wronie", "Wronin (woj. Małopolskie)", "Wronin (woj. Opolskie)", "Wroniniec", "Wronki", "Wronów (woj. Świętokrzyskie)", "Wronowice (woj. Lubelskie)", "Wronowice (woj. Łódzkie)", "Wronowice (woj. Małopolskie)", "Wronowy", "Wrotków"]'),
            $locationList,
            'Expected that both location list are the same'
        );
    }
}
