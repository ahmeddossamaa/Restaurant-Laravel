@extends('layouts/master2')


@section('content')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $er)
            <li> {{ $er }} </li>
        @endforeach
    </ul>
@endif

<h3 class="text-center p-4 text-success">Add New Item</h3>
<form action="{{ route('menus.store') }}" method="POST" class="text-start">
    
    @csrf

    <div class="mt-3">
        <label for="menuName" class="form-label">Item Name</label>
        <input type="text" name="menu_name" id="menuName" class="form-control" maxlength="150" required>
        <small id="helpId" class="text-muted">Maximum Char 150</small>
    </div>
    <div class="mt-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="menu_price" id="price" class="form-control" required>
    </div>
    <div class="mt-3">
        <label for="image" class="form-label">Image File</label>
        <input type="text" name="menu_image" id="image" class="form-control" required>
    </div>
    <div class="mt-3">
        <label for="info" class="form-label">Details</label>
        <textarea name="menu_info" id="info" class="form-control" required></textarea>
        <small id="helpId" class="text-muted">Maximum Char 250</small>
    </div>
    <div class="mt-3">
        <label for="status" class="form-label">Status</label>
        <select name="menu_status" id="status" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <div class="my-3">
        <input type="submit" class="btn btn-success btn-lg d-block w-100" value="Add Item">
    </div>
</form>

@endsection

