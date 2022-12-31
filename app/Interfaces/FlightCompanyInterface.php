<?php

namespace App\Interfaces;

interface FlightCompanyInterface
{
    public function transform(array $data): array;
    public function fetch(): array;
}
