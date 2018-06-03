<?php

declare(strict_types=1);

namespace BurzeDzisNet\Mappings;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \BurzeDzisNet\StormMapper
 */
class StormMapperTest extends TestCase
{
    /**
     * @covers ::mapToStorm()
     */
    public function testMapToStorm()
    {
        $storm = (new StormMapper())->mapToStorm(
            (object) [
                'liczba' => 14,
                'odleglosc' => 80.72,
                'kierunek' => 'NE',
                'okres' => 10,
            ]
        );

        $this->assertSame(
            14,
            $storm->lightnings(),
            sprintf('Expected number of lightnings to be %d, but was %d', 14, $storm->lightnings())
        );

        $this->assertSame(
            80.72,
            $storm->distance(),
            sprintf('Expected distance to be %f, but was %f', 80.72, $storm->distance())
        );

        $this->assertSame(
            'NE',
            $storm->direction(),
            sprintf('Expected direction to be %s, but was %s', 'NE', $storm->direction())
        );

        $this->assertSame(
            10,
            $storm->period(),
            sprintf('Expected period to be %d, but was %d', 10, $storm->period())
        );
    }
}
