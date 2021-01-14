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


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function rent($book_id)
    {
        $book = Book::findOrFail($book_id);
        if ($book->status != 'give back' && $book->status == 'rent') {
            Book::where('id', $book_id)->update(array('status' => 'give back'));
            return redirect('/');
        }
        elseif ($book->status != 'rent'&& $book->status == 'give back'){
            Book::where('id', $book_id)->update(array('status' => 'rent'));
            return redirect('/');
        }

    }


}
