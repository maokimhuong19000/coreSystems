<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('asset/backend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/backend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/backend/css/style.css') }}">
    <!-- Other necessary stylesheets -->
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="author" content="themesflat.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/backend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/backend/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/backend/css/bootstrap.cs') }}s">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/backend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/backend/css/style.css') }}">
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('asset/backend/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('asset/backend/icon/style.css') }}">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('asset/backend/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('asset/backend/images/favicon.png') }}">
</head>

<body>

    @yield('content')
    <script src="{{ asset('asset/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/backend/js/main.js') }}"></script>

    <!-- Javascript -->
    <script src="{{ asset('asset/backend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/backend/js/zoom.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/line-chart-1.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/line-chart-2.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/line-chart-3.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/line-chart-4.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/line-chart-5.js') }}"></script>
    <script src="{{ asset('asset/backend/js/apexcharts/line-chart-6.js') }}"></script>
    <script src="{{ asset('asset/backend/js/theme-settings.js') }}"></script>



    <!-- Other necessary scripts -->
</body>

</html>
