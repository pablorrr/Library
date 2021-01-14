<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\BorrowedBooks;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminBorrowedController extends Controller
{
    public function index()
    {
        $borrowed = BorrowedBooks::orderBy('user_id', 'asc')->get();
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

    public function rent($book_id, $user_id)
    {
        $book = Book::findOrFail($book_id);

        if ($book->status != 'give back' && $book->status == 'rent') {
           // $checkBook =  BorrowedBooks::findOrFail($user_id);
            //if($checkBook->user_id != $user_id ) return;
            Book::where('id', $book_id)->update(array('status' => 'give back'));
            BorrowedBooks::insert(['user_id' => $user_id, 'book_id' => $book_id
            ]);
            return redirect('/');

        } elseif ($book->status != 'rent' && $book->status == 'give back') {
            Book::where('id', $book_id)->update(array('status' => 'rent'));
            BorrowedBooks::where('user_id', '=', $user_id)->where('book_id', '=', $book_id)->delete();

            return redirect('/');
        }

    }

}
