<?php

namespace App\Http\Controllers;

use App\Book;
//use App\Http\Requests\FilterProducts;
use App\QueryFilters\BookFilters;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(BookFilters $filters)
    {


        $books = Book::filterBy($filters)->orderBy('title','asc')->paginate(3);
        $booksCount = Book::count();

        return view('public/books/book', compact('books','booksCount'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


}
