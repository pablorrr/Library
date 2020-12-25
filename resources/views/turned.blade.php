<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="{!! url('/'); !!}">Book</a></li>
                <li><a href="{!! url('/turned'); !!}">Turned</a></li>
                <li><a href="{!! url('/borrower'); !!}">Borrower</a></li>
                <li><a href="{!! url('/borrowed'); !!}">Borrowed</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Book</h1>
        <p>Main page</p>
    </div>
</div>

<div class="container-fluid bg-3 text-center">

    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">id borrower</th>
                <th scope="col">id borrowed</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>
    </div>
    <br>


    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>
</html>
