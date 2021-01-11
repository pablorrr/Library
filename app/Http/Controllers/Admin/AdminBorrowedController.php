<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\BorrowedBooks;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBorrowedController extends Controller
{
    public function index()
    {
        $borrowed = BorrowedBooks::all();
        return view('admin/dashboard/tables/borrowed-table', ['borrowed' => $borrowed]);
    }

    public function showUser($user_id)
    {
        $user = User::findOrFail($user_id);

        return view('admin.dashboard.tables.show-user-table', compact('user'));
    }

    public function showBook($book_id)
    {
        $book = Book::findOrFail($book_id);

        return view('admin.dashboard.tables.show-book-table', compact('book'));
    }

}
