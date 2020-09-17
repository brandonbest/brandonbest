<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show

    @section('favicon')
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    @show

    <title>@yield('title', 'Brandon Best')</title>
    @yield('preload')

    @section('css')
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    @show

    @yield('js')
</head>

<body class="@yield('bodyClass')">
@yield('content')
@section('js-footer')
    <script src="{{ mix('js/app.js') }}" async></script>

@show
@yield('tracking')
</body>
</html>