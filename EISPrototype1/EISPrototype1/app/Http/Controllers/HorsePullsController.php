<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorsePullsController extends Controller
{
    public function ViewHorsePulls(){
        return view('Livestock.HorsePulls');
    }
}
