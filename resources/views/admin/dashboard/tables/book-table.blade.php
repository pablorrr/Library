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
                        <th scope="col">Edit</th>
                        <th scope="col">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $singleBook)
                        <tr>
                            <th scope="row">{{$singleBook->id}}</th>
                            <td><a href="{{route('admin.book.show',$singleBook->id)}}">
                                    {{$singleBook->title}}</a>
                            </td>
                            <td><a href="{{route('admin.book.edit',$singleBook->id)}}"
                                   class="btn btn-info btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="{{route('admin.book.destroy',$singleBook->id)}}"
                                   class="btn btn-danger btn-sm">Remove</a>
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
