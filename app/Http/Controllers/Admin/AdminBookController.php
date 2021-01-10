<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateBookRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class AdminBookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin/dashboard/tables/book-table', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.tables.create-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateBookRequest $request)
    {
        $book = new Book;
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->save();

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Książka została dodana',
            ]
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, UpdateBookRequest $request)
    {
        $book = Book::findOrFail($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        //zachoiwanie zmian do DB
        $book->save();

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Książka została dodana',
            ]
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
