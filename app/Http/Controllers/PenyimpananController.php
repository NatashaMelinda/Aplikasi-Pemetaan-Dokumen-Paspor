<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyimpananController extends Controller
{
    public function penyimpanan()
    {
        return view('penyimpanan');
    }
}