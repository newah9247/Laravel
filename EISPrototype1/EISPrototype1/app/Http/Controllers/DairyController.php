<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DairyController extends Controller
{
    public function ViewDairy(){
        return view('Livestock.Dairy');
    }
}
