<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Borrower;

class AdminBorrowerController extends Controller
{
    public function index()
    {   $borrower = Borrower::all();
        return view('admin/dashboard/tables/borrower/borrower-table',['borrower' => $borrower]);
    }
}
