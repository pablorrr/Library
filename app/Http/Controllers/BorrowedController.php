<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowedController extends Controller
{
    public function index(){
        return view('borrowed');
    }
}
