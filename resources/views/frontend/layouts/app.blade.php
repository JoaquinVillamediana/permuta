<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Permuta</title>

    <!-- Scripts -->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script defer src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="{{asset('/js/functions.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('/assets/css/fonts/nunito.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend/general.css') }}">

</head>

<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>