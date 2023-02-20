<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Admin · @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css')}}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-docs.css')}}" type="text/css">
        <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('libs/slick/slick.css')}}" type="text/css">
    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css')}}" type="text/css">

</head>

<body class="auth">
    @yield('content')


<!-- Bundle scripts -->
<script src="{{ asset('libs/bundle.js')}}"></script>

<!-- Main Javascript file -->
<script src="{{ asset('dist/js/app.min.js')}}"></script>
</body>
    <!-- END: Body-->
</html>
