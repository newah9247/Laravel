<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeefController extends Controller
{
    public function ViewBeef(){
        return view('Livestock.Beef');
    }
}
