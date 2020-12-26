<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBorrowerController extends Controller
{
    public function index()
    {
        return view('admin/dashboard/tables/borrower/borrower-table');
    }
}
