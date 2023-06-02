<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="skrollr skrollr-desktop">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atelier des petits papiers</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">


    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">


    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
  
</head>



<body>
    <div id="skrollr-body">
    @include('includes.header')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
</div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


        <script src="{{ asset('js/skrollr.min.js') }}"></script>
       <script src="{{ asset('js/smoothscroll.min.js') }}"></script>
        <script src="{{ asset('js/global.js') }}"></script>

</body>
</html>


