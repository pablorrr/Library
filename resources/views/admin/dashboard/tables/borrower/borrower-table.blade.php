@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Borrower Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
