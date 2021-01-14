<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\QueryFilters\BookFilters;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(BookFilters $filters)
    {
        $books = Book::filterBy($filters)->orderBy('title', 'asc')->paginate(3);
        $booksCount = Book::count();
        return view('public/books/book', compact('books', 'booksCount'));
    }
}
