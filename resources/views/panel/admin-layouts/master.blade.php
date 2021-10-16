<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('font-awesome/css/fontawesome.min.css') }}">

    <title>admin-panel</title>
</head>

<body class="d-flex flex-column min-vh-100">

    @if (Request::path() != 'admin/login' && Request::path() != 'admin')
        {{ View::make('panel/admin-layouts/header') }}
    @endif

    @yield('content')

    @if (Request::path() != 'admin/login' && Request::path() != 'admin')
        {{ View::make('panel/admin-layouts/footer') }}
    @endif
</body>

<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

</html>
