<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait FetchData
{
    public function fetch(): array
    {
        $response = Http::get(self::URL);

        return $this->transform($response->json());
    }
}
