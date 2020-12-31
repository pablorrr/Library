<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turned;

class TurnedController extends Controller
{ public function __construct(){
    $this->middleware('auth');
}
    public function index()
    {
        $turned = Turned::all();
        return view('public/turned', ['turned' => $turned]);
    }
}
