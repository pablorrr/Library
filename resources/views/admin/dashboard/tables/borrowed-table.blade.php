@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Book Table</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">user id</th>
                        <th scope="col">book id</th>
                        <th scope="col">amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--todo: przerobic to w ten spososb aby wuswietlaly sie nazy autora ksiazki tytuli nazwa usera ktry
                    wypozyczyl ksiazke--}}
                    @foreach($borrowed as $singleBorrowed)
                        <tr>
                            <th scope="row">{{$singleBorrowed->id}}</th>

                            <td><a href="{{route('admin.adminUserBorrowedTableShow',$singleBorrowed->user_id)}}">
                                    {{$singleBorrowed->user_id}}</a>
                            </td>
                            <td><a href="{{route('admin.adminBookBorrowedTableShow',$singleBorrowed->book_id)}}">
                                    {{$singleBorrowed->book_id}}</a>
                            </td>
                            <td>{{$singleBorrowed->amount}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
