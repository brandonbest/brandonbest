@extends('layout.base')

@section('header')
    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ url('/images/logos/brandon-best.png') }}" height="40" alt="Brandon Best" />
        </a>
    </nav>
@endsection

@section('nav')
    <nav class="navbar navbar-findcond">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('home') }}">GuestBook</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="{{ url('sign') }}">Sign the GuestBook</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection