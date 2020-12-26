@extends('layout')

@section('title', 'Book')

@section('content')
    <table class="table table-striped">
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
                <th scope="row">{{$singleBook->id_book}}</th>
                <td>{{$singleBook->title}}</td>
                <td>{{$singleBook->author}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

