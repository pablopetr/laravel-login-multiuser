@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">Categories</h4>
                    <div class="buttons">
                        <a class="btn btn-primary" href="/admin/create-category">Add category</a>
                        <a class="btn btn-warning" href="/admin/create-product">Add product</a>
                    </div>
                </div>
                <ul>
                    @foreach ($categories as $category)
                    <li>
                        <h4>{{ $category->name }}</h4>
                        <a class="btn btn-danger" href="/admin/delete-category/{{ $category->id }}">Delete category</a>
                        <ul>
                            @foreach ($category->products as $p)
                                <li>
                                    <div class="card card-product">
                                        <div class="card-header">
                                             {{ $p->name }}
                                            <a class="btn btn-danger" href="/admin/delete-product/{{ $p->id }}">Delete</a>
                                        </div>
                                        <div class="card-body">
                                            <img src="/storage/{{ $p->image }}">
                                        </div>
                                        <div class="card-footer">
                                            <p>Price: {{ $p->price }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
