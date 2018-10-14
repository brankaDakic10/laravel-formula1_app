<?php

namespace App\Http\Controllers;
use App\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function show($id)
    {
        $driver=Driver::find($id);
        return view('drivers.drivers-show',compact('driver'));
    }
}
