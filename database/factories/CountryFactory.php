<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    public function definition()
    {
        return [
            'country_code' => 'DE',
        ];
    }

    public function germany(): self
    {
        return $this;
    }
}
