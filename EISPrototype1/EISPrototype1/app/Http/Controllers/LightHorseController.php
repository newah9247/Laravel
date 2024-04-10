<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LightHorseController extends Controller
{
    public function ViewLightHorse(){
        return view('Livestock.LightHorse');
    }
}
