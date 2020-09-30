
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>@yield('title')</title>
    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    <style>
.mySlides {display:none}
</style>
</head>
<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        @include('admin.layout.head')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
        @include('admin.layout.nav')
            
        @yield('content')    

        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!--SLider JS-->
    <script>
   var slideIndex = 1;
   showDivs(slideIndex);
   
   function plusDivs(n) {
     showDivs(slideIndex += n);
   }
   
   function currentDiv(n) {
     showDivs(slideIndex = n);
   }
   
   function showDivs(n) {
     var i;
     var x = document.getElementsByClassName("mySlides");
     var dots = document.getElementsByClassName("demo");
     if (n > x.length) {slideIndex = 1}    
     if (n < 1) {slideIndex = x.length}
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
     }
     for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-red", "");
     }
     x[slideIndex-1].style.display = "block";  
     dots[slideIndex-1].className += " w3-red";
   }
</script>



<!-- end document-->
</body>

</html>
<!-- end document-->
