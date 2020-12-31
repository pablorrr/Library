<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrower;

class BorrowerController extends Controller
{ public function __construct(){
    $this->middleware('auth');
}
    public function index()
    {
        $borrower = Borrower::all();
        return view('public/borrower', ['borrower' => $borrower]);
    }
}
