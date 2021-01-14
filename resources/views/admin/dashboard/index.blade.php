@extends('admin.dashboard.base')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    </div>
    <form action="{{route('admin.user.update')}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                   placeholder="Enter name" value="{{auth()->user()->name}}">
            <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            @if ($errors->has('name'))
                <div class="badge badge-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            @if ($errors->has('password'))
                <div class="badge badge-danger">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="repeat_password"> Repeat Password</label>
            <input type="password" class="form-control" name="repeat_password" id="repeat_password"
                   placeholder="Repeat Password">
            @if ($errors->has('repeat_password'))
                <div class="badge badge-danger">{{ $errors->first('repeat_password') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
