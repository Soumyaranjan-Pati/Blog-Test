<head>

    <!-- SITE TITLE -->
    <title>Blog Test</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Themify Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput/intlTelInput.css') }}">

<body>
    @include('frontend.layouts.header')
    @yield('content')
  

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- jquery-ui -->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- parallax js  -->
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <!-- jquery dd js  -->
    <script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
    <!-- countdown js  -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- jquery.parallax-scroll js -->
    <script src="{{ asset('assets/js/jquery.parallax-scroll.js') }}"></script>
    <!-- elevatezoom js -->
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    @stack('scripts')
</body>
