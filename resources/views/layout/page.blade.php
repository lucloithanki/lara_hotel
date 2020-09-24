<!doctype html>
<html class="no-js') }}" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icon-font.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
    @include('layout.head')
    @include('layout.slider')
    <div class="main-wrapper">
    @yield('content')
    </div>
    @include('layout.footer')
<body>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>