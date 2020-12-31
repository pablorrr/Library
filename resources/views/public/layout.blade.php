<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('template/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Book</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            @if(Auth::check())
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{!! url('/'); !!}">Book</a></li>
                    <li><a href="{!! url('/turned'); !!}">Turned</a></li>
                    <li><a href="{!! url('/borrower'); !!}">Borrower</a></li>
                    <li><a href="{!! url('/borrowed'); !!}">Borrowed</a></li>
                    @if (Auth::user()->isAdmin()=='admin')
                        <li><a href="{!! url('/admin'); !!}">ADMIN</a></li>
                    @endif
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>


</nav>

<div class="jumbotron">
    <div class="container text-center">
        <h1>@yield('title')</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @yield('content')
        </div>

    </div>
</div>
<br>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
<!-- jQuery -->
<script src="{{ asset('template/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap4 files-->
<script src="{{ asset('template/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<!-- custom javascript -->
<script src="{{ asset('template/js/script.js') }}" type="text/javascript"></script>
</body>
</html>
