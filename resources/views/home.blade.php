@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged as User</h3>
                    <p>This page is show just for the user with your account</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
