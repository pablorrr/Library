<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turned;

class TurnedController extends Controller
{
    public function index()
    {
        $turned = Turned::all();
        return view('public/turned', ['turned' => $turned]);
    }
}
