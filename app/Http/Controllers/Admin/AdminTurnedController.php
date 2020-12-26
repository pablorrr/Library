<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Turned;

class AdminTurnedController extends Controller
{
    public function index()
    {
        $turned = Turned::all();
        return view('admin/dashboard/tables/turned/turned-table', ['turned' => $turned]);
    }
}
