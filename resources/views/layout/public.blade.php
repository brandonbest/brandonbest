@extends('layout.base')
@section('content')
    @section('header')
        @include('layout.header.nav-default')
    @show

    @section('nav')
        @include('layout.header.nav-secondary-default')
    @show

    @yield('body')

    @section('footer')
        <div class="footer">
            @include('layout.footer.top-default')
            @include('layout.footer.bottom-default')
        </div>
    @show
@endsection