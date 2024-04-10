<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniController extends Controller
{
    public function ViewMini(){
        return view('Livestock.Mini');
    }
}
