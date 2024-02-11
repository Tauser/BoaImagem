<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(9);
        $categories = Customer::all();
        return view('cliente.index', compact('customers','categories'));
    }

    public function show()
    {
    }

}
