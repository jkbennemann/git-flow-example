<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Collection;

class CurrencyService
{
    public function currenciesFor(string $countryCode): Collection
    {
        return collect(['EUR']);
    }
}
