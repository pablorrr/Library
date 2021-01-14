<?php

namespace App\Http\Controllers;

use App\Book;


use App\QueryFilters\BookFilters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(BookFilters $filters)
    {


        $books = Book::filterBy($filters)->orderBy('id', 'asc')->paginate(3);
        $booksCount = Book::count();

        return view('public/books/book', compact('books', 'booksCount'));
    }


}
