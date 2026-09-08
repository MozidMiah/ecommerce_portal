<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($slug)
    {
        return view('checkout.index', compact('slug'));
    }
}
