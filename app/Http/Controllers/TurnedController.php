<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnedController extends Controller
{
    public function index(){
        return view('turned');
    }
}
