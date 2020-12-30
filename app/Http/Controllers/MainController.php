<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Book;

class MainController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $books = Book::all();
        return view('public/book', ['books' => $books]);
    }
}