@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Borrowed Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
