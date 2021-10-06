@extends('layouts/master2')

@section('content')

<div class="row text-start">
    <div class="col-3 p-3 bg-warning">
        <img src="{{ asset('images/' . $row["img"]) }}" class="float-start w-100 p-2">
    </div>
    <div class="col-9 p-3 bg-info">
        <h3>id: {{ $row['menu_id'] }}</h3>
        <p>Info: {{ $row['info'] }}</p>
        <p>
        <span class="badge bg-primary fs-6">{{ $row['price'] }} <sup>egp</sup></span>
        <br>

        @if ($row['item_status'] == 1)
            <span class="badge bg-success fs-6">Active</span>
        @else
            <span class="badge bg-danger fs-6">Inactive</span>
        @endif

        </p>
    </div>
</div>

@endsection
