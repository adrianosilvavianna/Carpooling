<?php

namespace App\Http\Controllers\User\Car;

use App\Domains\Location;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    protected $location;

    public function __construct(Location $location)
    {
        $this->location = $location;
    }
}
