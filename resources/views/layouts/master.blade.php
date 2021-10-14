<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('font-awesome/css/fontawesome.min.css') }}">

    <title>e-commerce - shop</title>
</head>

<body class="d-flex flex-column min-vh-100">
    {{ View::make('layouts/header') }}
    @yield('content')
    {{ View::make('layouts/footer') }}
</body>

<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

</html>
