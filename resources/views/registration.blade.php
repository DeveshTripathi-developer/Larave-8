@extends('layouts/master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 offset-3 border border-2 rounded-2 border-warning bg-warning p-3">
                <h3 class="text-center">User Registration</h3>
                <hr>
                <form method="POST" action="user-registration">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="telnumber">Phone Number:</label>
                        <input type="tel" class="form-control" id="telnumber" placeholder="Enter email" name="telnumber"
                            required>
                    </div>
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
                    <p class="message">Registered User? <a href="user-login">Login Now!</a></p>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
