@extends('layout')

@section('content')
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Imie</th>
            <th scope="col">Nazwisko</th>

        </tr>
        </thead>
        <tbody>
        @foreach($borrower as $singleBorrower)
            <tr>
                <th scope="row">{{$singleBorrower->id_borrower}}</th>
                <td>{{$singleBorrower->imie}}</td>
                <td>{{$singleBorrower->nazwisko}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

