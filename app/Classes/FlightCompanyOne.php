<?php

namespace App\Classes;

use App\Interfaces\FlightCompanyInterface;
use App\Traits\FetchData;

class FlightCompanyOne implements FlightCompanyInterface
{
    use FetchData;

    const URL = 'https://ats.hire.camp/api/company1/tickets';

    /** 
     * transform data to standard
     */
    public function transform(array $data): array
    {
        $flightData = [];

        $i = 0;

        foreach ($data as $item) {
            $flightData[$i]['ticket_id'] = $item['TicketID'];
            $flightData[$i]['origin'] = $item['Origin'];
            $flightData[$i]['destination'] = $item['Destination'];
            $flightData[$i]['date'] = $item['FlightDate'];
            $flightData[$i]['flight_number'] = $item['FlightNumber'];
            $flightData[$i]['airline'] = $item['Airline'];
            $flightData[$i]['price'] = $item['Price'];
            $flightData[$i]['count'] = $item['Count'];

            $i++;
        }

        return $flightData;
    }
}
