<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function showTime()
    {
        return view('time'); // Loads the Blade view
    }
}
