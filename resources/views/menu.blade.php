@php
    session_start();
@endphp

@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5 text-success display-4">Coco Menu</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($rows as $row)
                
            <div class="col-md-3 my-3">
                <div class="card">
                    <img class="card-img-top" src="images/{{$row->img}}" alt="pizza">
                    <div class="card-body">
                        <h4 class="card-title">{{$row->menu_name}}</h4>
                        <p class="card-text">
                            {{$row->info}}
                        </p>
                        <span class="badge bg-danger fs-5 p-3">
                            {{$row->price}} <sup>egp</sup>
                        </span>
                    </div>
                </div>
            </div>
            
            @endforeach


        </div>
    </div>
@endsection
