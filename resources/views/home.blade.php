@extends('layouts/master')
@section('content')
    {{-- <h1>Home Page</h1> --}}

    <h3>{{ session('profile.email') }}</h3>

@endsection
