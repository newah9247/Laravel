<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackPage extends Controller
{
    public function index()
    {
        return view("../");
    }
}
