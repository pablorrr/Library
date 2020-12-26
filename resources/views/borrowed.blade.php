@extends('layout')

@section('content')
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id borrowed</th>
            <th scope="col">id borrower</th>
            <th scope="col">id book</th>
        </tr>
        </thead>
        <tbody>
        @foreach($borrowed as $singleBorrowed)
            <tr>
                <th scope="row">{{$singleBorrowed->id_borrowed}}</th>
                <td>{{$singleBorrowed->id_borrower}}</td>
                <td>{{$singleBorrowed->id_book}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



