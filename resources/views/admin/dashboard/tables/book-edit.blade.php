@extends('admin.dashboard.base')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p>
                    <a href="{{route('admin.book')}}"
                       class="btn btn-success btn-sm">Back to Book Table</a>
                </p>
            </div>
            <div class="card-header py-3">
                <p>
                    <a href="{{route('admin.borrowed')}}"
                       class="btn btn-success btn-sm">Back to Borrowed Book Table</a>
                </p>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Book</h6>
            </div>
            <form action="{{ route('admin.book.update', $book->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="title">Tytuł</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Tytuł" value="{{ $book->title }}">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">Autor</label>
                    <input type="text" name="author" class="form-control" id="author" placeholder="Autor" value="{{ $book->author }}">
                    @if ($errors->has('author'))
                        <span class="text-danger">{{ $errors->first('author') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
            </form>



        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
