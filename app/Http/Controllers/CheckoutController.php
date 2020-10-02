<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    private $customer;
    public function checkout()
    {
        return view('checkOut');
    }


    public function store(Request $request) {

        return redirect('/');
    }
}
