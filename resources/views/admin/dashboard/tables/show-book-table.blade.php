@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p>
                    <a href="{{route('admin.adminbook')}}"
                       class="btn btn-danger btn-sm">Back</a>
                </p>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Book Table</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>

                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
