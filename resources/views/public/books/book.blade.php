@extends('public.layout')

@section('title', 'Book')

@section('content')
    <?php// use App\BorrowedBooks;use App\User;?>
    {{--czesc procesu autentykacji-- za pozyczone z home. blade--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                                You are logged in!
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped">

        <?php

        //uwaga!!! przy wsyztskich wlasciwowsciach jest mozliwosc postawinia () jako ze sa to odwolania do metod!!
        //test dla has many - users has many books  , w boorowed books jest klucz obcy user_id
        //$books2 = User::find(2)->borrowed_books;
        //dd($books2);





        //terst dla belogns to  tablica book przypisana do borrowed book
        // $book = \App\Book::find(2);//nawiguje po bookk id w borrowed books
        // $user = $book->borrowed_book;
        //dd($user);- dobrze

        //test dla has_one() - borrowed books moze miecjedna ksiazke
        //$borrowedBooks = BorrowedBooks::find(4)->books;//nawiguje po book id w borrowed
        //dd($borrowedBooks); - dobrze
        //test dla belongs to dla borrowed books w stosunku do users - jedna pozyczona ksiazka orzez usera
        // $book = \App\BorrowedBooks::find(1);//nawiguje po bookk id w borrowed books
        // $userr = $book->users;
        // dd($userr);

        //test- sprawdz jakiego autora wypozycza dany user
        //uwaga!!! ponizsza linijka jest zawarta w metodzie myquery klasy mopdelu borrowed books
        //$book_id = DB::table('borrowed_books')->select('book_id')->where('user_id', '=', '2')->get();
        //$book_id = BorrowedBooks::myQuery();
        // $authorArr = [];

        // foreach ($book_id as $id) {
        //$books = \App\Book::findorFail((int)$id->book_id);
        //$author =(string) $books->author;
        //  array_push($authorArr, $author);
        //   }
        //  dd($authorArr);//works!!!



        ?>
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>

        </tr>
        </thead>
        <tbody>
        @foreach($books as $singleBook)
            <tr>
                <th scope="row">{{$singleBook->id}}</th>
                <td>{{$singleBook->title}}</td>
                <td>{{$singleBook->author}}</td>
                <td><a href="{{route('admin.book')}}"
                       class="btn btn-primary btn-sm">Borrow</a></td>
                <td><a href="{{route('admin.book')}}"
                       class="btn btn-warning btn-sm">Give back</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

