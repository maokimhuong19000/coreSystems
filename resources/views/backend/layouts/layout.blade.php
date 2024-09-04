<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('asset/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/backend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/backend/css/iofrm-style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/backend/css/iofrm-theme1.css') }}">
</head>

<body>
   
    @yield('content') <!-- This is where the page-specific content will go -->

    <script src="{{ asset('asset/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/backend/js/main.js') }}"></script>
</body>
</html>
