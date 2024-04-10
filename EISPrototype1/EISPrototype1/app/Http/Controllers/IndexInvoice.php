<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class IndexInvoice extends Controller
{
    public function index()
    {
        return view('InvoicePHP/index');
    }
}
