<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivestockController extends Controller
{
    public function HorsePulls(){
        return view('Livestock.HorsePulls');
    }
}
