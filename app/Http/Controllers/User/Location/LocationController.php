<?php

namespace App\Http\Controllers\User\Location;

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

