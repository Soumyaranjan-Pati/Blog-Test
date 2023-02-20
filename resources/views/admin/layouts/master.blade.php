<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title> Admin · @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}"/>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css')}}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-docs.css')}}" type="text/css">
        <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('libs/slick/slick.css')}}" type="text/css">    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css')}}" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tables/datatable/datatables.min.css') }}">

</head>
<body>
    @include('admin.layouts.header')

    <div class="header-bar "> <!-- Menu close button for mobile devices -->
        <a href="{{route('admin.add_user')}}" class="text-secondary fs-5 mb-4">
            Add User
        </a>
    </div>
    @yield('content')

</div>
<!-- ./ layout-wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Apex chart -->
<script src="{{ asset('libs/charts/apex/apexcharts.min.js')}}"></script>

<!-- Slick -->
<script src="{{ asset('libs/slick/slick.min.js')}}"></script>

<!-- Examples -->
<script src="{{ asset('dist/js/examples/dashboard.js')}}"></script>

<!-- Bundle scripts -->
<script src="{{ asset('libs/bundle.js')}}"></script>

<!-- Main Javascript file -->
<script src="{{ asset('dist/js/app.min.js')}}"></script>

@stack("scripts")
    <!-- END: Body-->
</body>
