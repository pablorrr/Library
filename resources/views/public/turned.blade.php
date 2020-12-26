@extends('public.layout')

@section('title', 'Turned')

@section('content')
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">id borrower</th>
            <th scope="col">id borrowed</th>
        </tr>
        </thead>
        <tbody>
        @foreach($turned as $singleTurned )
            <tr>
                <th scope="row">{{$singleTurned->id}}</th>
                <td>{{$singleTurned->id_borrower}}</td>
                <td>{{$singleTurned->id_borrowed}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
