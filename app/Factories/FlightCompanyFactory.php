<?php

namespace App\Factories;

use App\Classes\FlightCompanyOne;
use App\Classes\FlightCompanyTwo;
use Exception;

class FlightCompanyFactory
{
    /**
     * create instance base on $companyName
     */
    public static function make($companyName)
    {
        switch ($companyName) {
            case 'company1':
                return new FlightCompanyOne;
            case 'company2':
                return new FlightCompanyTwo;
            default:
                abort(404);
        }
    }
}
