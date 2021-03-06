<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href='../images/favicon.png'>
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<header class="header">
    @include('partials.nav')
    @include('partials.mob-menu')
</header>
<body>
    @yield('content')
    @include('partials.footer')
    <script src={{asset('js/app.js')}}></script>
    <script src = {{asset('js/script.js')}}></script>
    <script src={{asset('js/particles.min.js')}}></script>
    <script>
    particlesJS.load('particles-js', '../js/config.json', function() {
        console.log('callback - config.json config loaded');
    });

    </script>
    </body>
</html>
