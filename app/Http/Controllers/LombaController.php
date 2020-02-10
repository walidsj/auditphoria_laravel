<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    //
    public function cfp()
    {
        return view('lomba.cfp');
    }

    public function audit()
    {
        return view('lomba.audit');
    }
}
