@extends('layouts/master')

@section('content')
<div class="container px-0">
    <div class="row">
        <div class="col">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="{{ route('menu') }}"><img class="d-block w-100" src="images/slide01.jpg"
                                alt="First slide"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ route('menu') }}"><img class="d-block w-100" src="images/slide02.jpg"
                                alt="Second slide"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ route('menu') }}"><img class="d-block w-100" src="images/slide03.jpg"
                                alt="Third slide"></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
