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
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Usuń</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $singleBook)
                        <tr>
                            <th scope="row">{{$singleBook->id}}</th>
                            <td>{{$singleBook->title}}</td>
                            <td>{{$singleBook->author}}</td>

                            <td>
                                <a href="{{route('admin.destroy',$singleBook->id)}}"
                                   class="btn btn-danger btn-sm">Usuń</a>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection