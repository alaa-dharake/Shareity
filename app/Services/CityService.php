<?php

namespace App\Services;

use App\Models\City;

class CityService
{
    public function getCitiesByState($state_id)
    {
        return City::where('state_id', $state_id)->get();
    }
}
