<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    {{-- <title>General Dashboard &mdash; Stisla</title> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/modules/summernote/summernote-bs4.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dashboard/assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          @auth
          <div class="navbar-bg"></div>
          @include('layouts.dashboard.navbar')
          @include('layouts.dashboard.sidebar')
          @endauth
            @yield('content')
          @auth
          @include('layouts.dashboard.footer')
          @endauth'
        </div>
      </div>

    @stack('before-scripts')
    <!-- General JS Scripts -->
    <script src="{{asset('vendors/dashboard/assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/popper.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('vendors/dashboard/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/chart.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

    <!--Page Specific JS File -->
    @stack('page-scripts')

    <!-- Template JS File -->
    <script src="{{asset('vendors/dashboard/assets/js/scripts.js')}}"></script>
    <script src="{{asset('vendors/dashboard/assets/js/custom.js')}}"></script>
    @include('sweetalert::alert')

    @stack('after-scripts')
</body>

</html>
