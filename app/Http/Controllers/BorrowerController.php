<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrower;

class BorrowerController extends Controller
{
    public function index()
    {
        $borrower = Borrower::all();
        return view('borrower', ['borrower' => $borrower]);
    }
}
