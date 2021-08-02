@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Register</h1>

        <form action="/register" method="POST">

            <div class="form-group">
                @csrf
                <label for="exampleInputPassword1">Username</label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
            </div>
            <div class="form-group">

                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Country</label>
                <input type="text" class="form-control" name="country" value="{{ old('country') }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
