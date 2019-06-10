@extends('layout.public')

@section('body')
<div class="container-fluid container-error">
    <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
            <h1>404 <span>Error</span></h1>
            <p>You have reached a page that does not exist! Use one of the links below to get back on track.</p>
            <p>&nbsp;</p>
            <ul class="list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection