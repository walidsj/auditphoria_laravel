<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=5">
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords" content="{{ config('app.keywords') }}">
    <meta name="og:title" property="og:title" content="{{ config('app.name') }}">
    <meta name="robots" content="index, follow">
    <link href="" rel="canonical">
    <link rel="shortcut icon" type="image/png" href="{{ config('app.icon') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/tema.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800|Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/aosjs/aos.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick-theme.css" />

    <meta name="theme-color" content="#037475" />
    <meta name="msapplication-navbutton-color" content="#037475" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#037475" />

</head>
    <body>
    
    <noscript>
        Browser tidak support javascript atau fungsi script pada browser telah dimatikan.
    </noscript>

    <div id='preloader'>
        <div class='spinner' id='loader'>
            <div id='shadow'></div>
            <div id='box'></div>
        </div>
    </div>

    @include('layouts.partials.navigation')

    @yield('header')

    @yield('content')

    @include('layouts.partials.footer')

    <script src="assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/aosjs/aos.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>
    <script src="assets/vendor/select2/js/select2.full.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass('selected').html(fileName);
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'assets/js/tawk.js';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    </body>
</html>
