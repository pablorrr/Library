<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all()->sortKeysDesc();
        return view('public/books/book', ['books' => $books]);
    }
}
