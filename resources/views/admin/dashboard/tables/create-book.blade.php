@extends('admin.dashboard.base')

@section('content')
    <div class="card-header py-3">
        <p>
            <a href="{{route('admin.book')}}"
               class="btn btn-success btn-sm">Back to Book Table</a>
        </p>
    </div>
    <form action="{{route('admin.book.store')}}" method="POST">
        @csrf
        <label for="title">Tytuł</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
        <label for="author">Autor</label>
        <input type="text" name="author" class="form-control" id="author" value="{{ old('author') }}">


        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif

        @if ($errors->has('author'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif

        <input type="submit" value="Zapisz">
    </form>
@endsection

