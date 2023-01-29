<!DOCTYPE html>
<html>
<head>
        <title>Dianterin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-elegant/elegant.css')}}">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl.carousel.2/assets/owl.carousel.css')}}">


        <!-- Animate Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.css')}}">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('layouts.landing.navbar')
        @yield('content')

        @include('layouts.landing.footer')

     <!-- Main Jquery JS -->
     <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
     <!-- Bootstrap JS -->
     <script src="{{asset('assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>
     <!-- Bootstrap Select JS -->
     <script src="{{asset('assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
     <!-- OwlCarousel2 Slider JS -->
     <script src="{{asset('assets/plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>
     <!-- Sticky Header -->
     <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
     <!-- Wow JS -->
     <script src="{{asset('assets/plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>
     <!-- Data binder -->
     <script src="{{asset('assets/plugins/data.binder.js/data.binder.js')}}" type="text/javascript"></script>

     <script src="{{asset('assets/js/theme.js')}}" type="text/javascript"></script>
     <!-- Map JS -->
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
     @include('sweetalert::alert')

     <!-- Slider JS -->
     {{-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> --}}


     <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="province_from"]').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="origin"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="origin"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="origin"]').empty();
                }
            });
            $('select[name="province_to"]').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="destination"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="destination"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="destination"]').empty();
                }
            });
        });
    </script>
    </body>
</html>
