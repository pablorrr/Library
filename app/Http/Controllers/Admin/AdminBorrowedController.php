<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Borrowed;

class AdminBorrowedController extends Controller
{
    public function index()
    {
        $borrowed = Borrowed::all();
        return view('admin/dashboard/tables/borrowed/borrowed-table', ['borrowed' => $borrowed]);
    }
}
