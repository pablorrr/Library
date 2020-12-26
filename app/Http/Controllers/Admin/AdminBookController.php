<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class AdminBookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin/dashboard/tables/book/book-table', ['books' => $books]);
    }
}
