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

    <title>COCO Pizza Backend</title>

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
        <div class="row align-items-center" style="height:120px">
            <div class="col-12">
                <h1 class="text-center font-weight-bolder display-5 text-white" style="font-family:'Dancing Script'">
                    <i>Coco Pizza</i> Backend
                </h1>
            </div>
        </div>
    </div>


    <!-- Start content here -->
    <div class="container">
        <div class="row text-center">
            <div class="col-md-2 bg-dark" style="min-height:500px;">
                <h5 class="text-center p-2 text-white">Commands</h5>
                <a class="btn btn-success d-block m-2" href="{{ route('menus.index') }}">Show Menu</a>
                <a class="btn btn-success d-block m-2" href="{{ route('emails.index') }}">Email List</a>
                <small class="text-white">{{ date('d M, Y h:i:s a') }}</small>

            </div>
            <div class="col-md-10 bg-light mb-5">
                <!-- #### Right Side #### -->


                @yield('content')





                <!-- #### End of Right Side #### -->
            </div>
        </div>
    </div>



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
                <form class="form-inline" action="subscribe.php" method="post">
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
