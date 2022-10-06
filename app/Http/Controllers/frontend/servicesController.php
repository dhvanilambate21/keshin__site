<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    function index(Request $req)
    {
        return view('frontend.services');
    }
}
