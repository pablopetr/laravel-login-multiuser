@extends('layouts.app')

@section('content')
<div class="content">
    <form method="POST" action="/admin/create-product" style="margin: 10%;" enctype="multipart/form-data">
    @csrf
    <h3>Add new product</h3>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label class="label-control" for="name">Product name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label class="label-control" for="price">Product price: </label>
                <input type="number" class="form-control" placeholder="0.00" required name="price" min="0" value="0.00" step="0.01"
                title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
            </div>
        </div>
        <div class="form-group">
            <label class="label-control" for="category">Category of product</label>
            <select class="form-control" name="category">
                @foreach ($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label class="label-control" for="description">Description of the product</label>
                <textarea class="form-control" rows="5" name="description"></textarea>
            </div>
            <div class="form-group">
                <label class="label-control" for="file">Upload the product image</label><br>
                <input type="file" name="file">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="post" value="Add product">
        </div>
    </div>
    </form>
</div>
@endsection