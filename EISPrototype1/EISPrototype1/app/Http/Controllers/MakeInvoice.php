<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeInvoice extends Controller
{
    public function index()
    {
        return view('InvoicePHP/MakeInvoice');
    }
}
