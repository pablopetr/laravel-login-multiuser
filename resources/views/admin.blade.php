@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Administrator </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged as ADMINISTRATOR</h3>
                    <p>This page is show just for the administrator with your account</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
