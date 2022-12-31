<?php

namespace App\Http\Controllers;

use App\Interfaces\FlightCompanyInterface;
use Illuminate\Support\Facades\Cache;

class FetchFlightController extends Controller
{
    // cache time in seconds
    private const CACHE_TIME = 300;

    /**
     * get flights data based on query string
     */
    public function __invoke(FlightCompanyInterface $flightCompany)
    {
        $companyName = request()->company;

        if (Cache::has($companyName)) {
            $flights = Cache::get($companyName);
        } else {
            $flights = $flightCompany->fetch();

            Cache::remember($companyName, self::CACHE_TIME, function () use ($flights) {
                return $flights;
            });
        }

        return view('flight-data', compact('flights'));
    }
}
