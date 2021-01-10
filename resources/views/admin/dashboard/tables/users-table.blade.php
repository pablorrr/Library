@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Table</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $singleUser)
                        <tr>
                            <th scope="row">{{$singleUser->id}}</th>
                            <td>{{$singleUser->name}}</td>
                            <td>{{$singleUser->email}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
@endsection
