@php
date_default_timezone_set("Africa/Cairo");
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COCO Pizza</title>

    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="apple-touch-icon" href="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Link to your css file -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <!-- Start header here -->
    <div class="px-0 container bg-warning" style="background: url(images/bg02.jpg) center center">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cocoNav"
                aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cocoNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row align-items-center" style="height:250px">
            <div class="col-12">
                <h1 class="text-center font-weight-bolder display-2 text-white" style="font-family:'Dancing Script'">
                    Welcome
                    <i>Coco Pizza</i>
                </h1>
            </div>
        </div>
    </div>


    <!-- Start content here -->
    @yield('content')


    <!-- Footer Section -->
    <div class="container bg-dark text-white py-2">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <ul class="list-unstyled">
                    <li>Cairo, Nasr City</li>
                    <li>Phone: 888-456-7890</li>
                    <li>Fax: 889-098-7654</li>
                </ul>
            </div>

            <div class="col-md-5 p-2">
                <form class="form-inline" action="subscribe" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="m-1 ">Newsletter</label>
                        <input type="email" name="email" class="form-control form-control-sm m-1" id="email"
                            placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-success btn-sm m-1">Subscribe</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col py-1">
                <h6 class="text-muted text-center">Coco © 2021 All Rights Reserved</h6>
            </div>
        </div>
    </div>

    <!-- Coding End -->

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
