<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemTable extends Controller
{
    public function index()
    {
        return view('InvoicePHP/InvoiceItemPHP/Itemtable');
    }
}
