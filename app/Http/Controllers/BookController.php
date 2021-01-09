<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $books = Book::all();
        return view('public/book', ['books' => $books]);
    }
}
