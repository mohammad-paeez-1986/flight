<?php

namespace App\Classes;

use App\Interfaces\FlightCompanyInterface;
use App\Traits\FetchData;

class FlightCompanyTwo implements FlightCompanyInterface
{
    use FetchData;
    
    const URL = 'https://ats.hire.camp/api/company2/tickets';

    /** 
     * transform data to standard
     */
    public function transform(array $data): array
    {
        // no need to change array keys, its already standard
        return $data;
    }
}
