<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUGLO</title>
    <meta name="keywords" content="Muglo,Mug">
    <meta name="description" content="SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="author" content="Bayu_Indra">

    <!-- FONTS ONLINE -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="{{ URL::asset('css/frontend/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/responsive.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('css/frontend/animate.css') }}" rel="stylesheet" media="all">

    <!-- Datatables -->
    <link href="{{ URL::asset('css/frontend/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONTS -->
    <link href="{{ URL::asset('css/frontend/font-awesome.min.css') }}" rel="stylesheet" media="all">


    <!-- Funkyradio -->
    <link href="{{ URL::asset('css/frontend/funkyradio.css') }}" rel="stylesheet" media="all">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/frontend/custom.css') }}" rel="stylesheet" media="all">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/rs-plugin/settings.css') }}" media="screen" />

    <!-- JavaScripts -->
    <script src="{{ URL::asset('js/frontend/modernizr.js') }}"></script>

</head>

<body>

<!-- LOADER ===========================================-->
<div id="loader">
    <div class="loader">
        <div class="position-center-center"> <img src="{{ asset('frontend_images/logotangerine.png') }}" style="width: 300px;" alt="">

            <p class="font-playfair text-center">Please Wait...</p>
            <div class="loading">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
</div>

<div id="wrap">
    <!-- HEADER -->
    @include('frontend.partials._header')
    <!-- //HEADER -->

    @yield('body-content')

    <!-- FOOTER -->
    @include('frontend.partials._footer')
    <!-- //FOOTER -->

    <!-- GO TO TOP -->
    <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
    <!-- GO TO TOP End -->
</div>

<script src="{{ URL::asset('js/frontend/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/wow.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/own-menu.js') }}"></script>
<script src="{{ URL::asset('js/frontend/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.flexslider-min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.isotope.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.nouislider.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.elevatezoom.js') }}"></script>
<script src="{{ URL::asset('js/frontend/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="{{ URL::asset('js/frontend/rs-plugin/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/rs-plugin/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/main.js') }}"></script>

<!-- autoNumeric -->
<script src="{{ URL::asset('js/autoNumeric/autoNumeric.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ URL::asset('js/frontend/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/datatable/dataTables.bootstrap.min.js') }}"></script>

<!-- Custom -->
<script src="{{ URL::asset('js/frontend/custom.js') }}"></script>
</body>
</html>