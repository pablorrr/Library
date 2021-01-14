@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p>
                    <a href="{{route('admin.user')}}"
                       class="btn btn-success btn-sm">Back to User Table</a>
                </p>
            </div>

            <div class="card-header py-3">
                <p>
                    <a href="{{route('admin.borrowed')}}"
                       class="btn btn-success btn-sm">Back to Borrowed Table</a>
                </p>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User</h6>
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
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
