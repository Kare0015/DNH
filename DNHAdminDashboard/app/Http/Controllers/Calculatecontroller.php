<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculatecontroller extends Controller
{
    public function index()

    {
        return view('calculate');
    }
}