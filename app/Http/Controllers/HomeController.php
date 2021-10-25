<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //練習七 7-1,7-3
    public function index()
    {
        return view('welcome');
    }
}
