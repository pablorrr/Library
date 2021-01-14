@extends('public.layout')

@section('title', 'Book')

@section('content')

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
                <td><a href="{{route('admin.book.rent',[$singleBook->id,auth()->user()->id])}}"
                       class="btn btn-primary btn-sm">{{$singleBook->status}}</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$books->links()}}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="d-flex justify-content-center">Books count : {{$booksCount}} </p>
        </div>
    </div>
@endsection

