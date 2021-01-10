<?php

namespace App\Http\Controllers\Admin;

use App\BorrowedBooks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBorrowedController extends Controller
{
    public function index()
    {
        $borrowed = BorrowedBooks::all();
        return view('admin/dashboard/tables/borrowed-table', ['borrowed' => $borrowed]);
    }
}
