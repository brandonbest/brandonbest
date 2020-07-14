<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show
    <title>@yield('title', 'Brandon Best')</title>
    @section('css')
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    @show

    @yield('js')
</head>

<body class="@yield('bodyClass')">
@yield('content')
@section('js-footer')
    <script src="{{ mix('js/app.js') }}"></script>

@show
@yield('tracking')
</body>
</html>