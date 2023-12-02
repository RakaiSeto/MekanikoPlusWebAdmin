@extends('layout.default')
@section('title', 'Home')

@section('content')
    <div class="vh-100 d-flex justify-content-center">
        <div class="form-access my-auto bg-dark-subtle rounded">
            <form action="/doLogin" method="POST">
                {{ csrf_field() }}
                <span>Sign In</span>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" id="emailx" name="emailx">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" id="passwordx" name="passwordx">
                </div>
                {{-- <div class="text-right">
                    <a href="/resetpassword">Forgot Password?</a>
                </div> --}}
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="form-checkbox">
                    <label class="custom-control-label" for="form-checkbox">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            @if (session('message'))
                &nbsp
                <div class="form-group alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <style>
    </style>
@endsection
