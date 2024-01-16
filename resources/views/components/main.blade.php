<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="garisAs" content="projek" />
    <title>GPIB SILOAM PONTIANAK @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/pages/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pages/css/style.css') }}">
</head>

<body class="bg-light">
    @include('components/navbar')
    @yield('content')
    @include('components/footer')
    <script src="{{ asset('assets/pages/js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>

</html>
