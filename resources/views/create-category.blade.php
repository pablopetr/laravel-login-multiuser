@extends('layouts.app')

@section('content')
<div class="content">
    <form method="POST" action="/admin/create-category" style="margin: 10%;" enctype="multipart/form-data">
    @csrf
    <h3>Add new product</h3>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label class="label-control" for="name">Category name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" name="post">
        </div>
    </div>
    </form>
</div>
@endsection