<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function index ()
    {
        return view('customer.home', ['data' => 'Hello']);
    }

    public function login ()
    {
        return view('customer.login', ['data' => 'Hello']);
    }
}
