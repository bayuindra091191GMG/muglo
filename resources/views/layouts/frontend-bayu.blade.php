<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>TANGERINE</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ URL::asset('frontend_images/favicon.ico') }}">


    <!-- CSS -->
    <link href="{{ URL::asset('css/frontend/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">


    <link href="{{ URL::asset('css/frontend/flexslider.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/fancySelect.css') }}" rel="stylesheet" media="screen, projection" >
    <link href="{{ URL::asset('css/frontend/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('css/frontend/style-bayu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend/frontend-custom-lowids-bayu.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ URL::asset('css/frontend/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


</head>

<body>

<!-- PRELOADER -->
<div id="preloader"><img src="{{ URL::asset('frontend_images/preloader.gif') }}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

    <!-- PAGE -->
    <div id="page">

        <!-- HEADER -->
    @include('frontend.partials._header')
    <!-- //HEADER -->

    @yield('body-content')

    <!-- FOOTER -->
    @include('frontend.partials._footer')
    <!-- //FOOTER -->
    </div>
    <!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
    <div id="tovar_content"></div>
    <div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

<!-- SCRIPTS -->
<!--[if IE]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE]><html class="ie" lang="en"> <![endif]-->

<script src="{{ URL::asset('js/frontend/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ URL::asset('js/frontend/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/datatable/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ URL::asset('js/frontend/jquery.sticky.js') }}"></script>
<script src="{{ URL::asset('js/frontend/parallax.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.flexslider-min.js') }}"></script>
<script src="{{ URL::asset('js/frontend/jquery.jcarousel.js') }}"></script>
<script src="{{ URL::asset('js/frontend/fancySelect.js') }}"></script>
<script src="{{ URL::asset('js/frontend/animate.js') }}"></script>
<script src="{{ URL::asset('js/frontend/myscript.js') }}"></script>


<script src="{{ URL::asset('js/frontend/custom.js') }}"></script>
<script src="{{ URL::asset('js/frontend/frontend-custom-lowids-bayu.js') }}"></script>
<script>
    if (top != self) top.location.replace(self.location.href);
</script>

</body>
</html>