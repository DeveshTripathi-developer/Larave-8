@extends('public/master')
@section('content')
    <h1>Home Page</h1>

    <h3>{{ dump(session('profile')) }}</h3>

@endsection
