@extends('layouts/master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 offset-3 border border-2 rounded-2 border-warning bg-warning p-3">
                <h3 class="text-center">User Login</h3>
                <hr>
                <form method="POST" action="user-login">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                            required>
                    </div>
                    <p class="message">Not Registered? <a href="user-registration">Register Now!</a></p>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
