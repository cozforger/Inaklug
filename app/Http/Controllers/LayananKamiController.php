<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananKamiController extends Controller
{
    public function index()
    {
        return view('layanan');
    }
}
