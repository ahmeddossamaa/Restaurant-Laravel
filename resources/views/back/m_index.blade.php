@extends('layouts/master2')

@section('content')

<h3 class="text-center p-4 text-success">Menu List</h3>


@if (session('msg'))
    <div class="bg-info py-3">
        <h3> {{ session('msg') }} </h3>
    </div>
@endif


<a href="{{ route('menus.create') }}" class="btn btn-primary btn-lg w-100 my-3">Add New Item</a>

<table class="table table-striped table-bordered table-success w-100 text-center">
    <tr>
        <th width="5%">SN</th>
        <th width="70%">Item Details</th>
        <th width="25%">Action</th>
    </tr>

    @php
        $counter = 1;
    @endphp

    @foreach ($rows as $row)

    <tr>
        <td>
            {{ $counter++ }}
        </td>
        <td class="text-start">
            <img src="../images/{{ $row['img'] }}" class="float-start w-25 p-2">
            <h5 class="fw-bold">{{ $row['menu_name'] }}</h5>
            <span class="badge  bg-primary fs-6">{{ $row['price'] }} <sup>egp</sup></span>
        </td>
        <td>
            <a href="{{ route('menus.show', [ $row['menu_id'] ]) }}" class="btn btn-success my-1 d-block">Show</a>
            <a href="{{ route('menus.edit', [ $row['menu_id'] ]) }}" class="btn btn-warning my-1 d-block">Edit</a>

            <form action="{{ route('menus.destroy', [$row['menu_id']]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger my-1 d-block w-100">Delete</button>
            </form>

        </td>
    </tr>

    @endforeach

</table>
@endsection
