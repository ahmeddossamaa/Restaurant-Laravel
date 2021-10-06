@extends('layouts/master2')


@section('content')

<h3 class="text-center p-4 text-success">Edit Menu Item</h3>
<form action="{{ route('menus.update', [ $row['menu_id'] ]) }}" method="post" class="text-start">

    @csrf
    @method('PUT')

    <input type="hidden" name="menu_id" id="menu_id" value="">
    <div class="mt-3">
        <label for="menuName" class="form-label">Item Name</label>
        <input value="{{ $row['menu_name'] }}" type="text" name="menu_name" id="menuName" class="form-control"
            maxlength="150" required>
        <small id="helpId" class="text-muted">Maximum Char 150</small>
    </div>
    <div class="mt-3">
        <label for="price" class="form-label">Price</label>
        <input value="{{ $row['price'] }}" type="text" name="menu_price" id="price" class="form-control"
            required>
    </div>
    <div class="mt-3">
        <label for="image" class="form-label">Image File</label>
        <input value="{{ $row['img'] }}" type="text" name="menu_image" id="image" class="form-control"
            required>
    </div>
    <div class="mt-3">
        <label for="info" class="form-label">Details</label>
        <textarea name="menu_info" id="info" class="form-control" required>{{ $row['info'] }}</textarea>
        <small id="helpId" class="text-muted">Maximum Char 250</small>
    </div>
    <div class="mt-3">
        <label for="status" class="form-label">Status</label>
        <select name="menu_status" id="status" class="form-control">
            @if ($row['item_status'] == 1)
                <option value="1" >Active</option>
                <option value="0" >Inactive</option>
            @else
                <option value="1" >Inactive</option>
                <option value="0" >Active</option>
            @endif
        </select>
    </div>
    <div class="my-3">
        <input type="submit" class="btn btn-success btn-lg d-block w-100" value="Update Item">
    </div>
</form>

@endsection
