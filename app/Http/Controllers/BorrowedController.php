<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrowed;

class BorrowedController extends Controller
{
    public function index()
    {//tworzenie tablicy obiektow z zawartoaci tabeli (jeden rekord= jeden obiekt)
        $borrowed = Borrowed::all();
        return view('public/borrowed', ['borrowed' => $borrowed]);
    }
}
