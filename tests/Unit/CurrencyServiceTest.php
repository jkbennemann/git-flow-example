<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\Country;
use Tests\TestCase;

class CurrencyServiceTest extends TestCase
{
    /** @test */
    public function it_returns_currencies_for_germany(): void
    {
        $germany = Country::factory()->create(['country_code' => 'DE']);
        $currencies = $germany->currencies();

        $this->assertCount(1, $currencies);
        $this->assertEquals('EUR', $currencies->first());
    }
}
