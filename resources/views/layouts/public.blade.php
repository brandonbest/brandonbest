@extends('layouts.base')

@section('css')
    @parent
    @include('components.loader-css')
@endsection

@section('preload')
    @include('components.preload')
@endsection

@section('content')
    @section('body')
        <div id="app-loader">
            <div class="logo"></div>
            <div class="logo-repeat"></div>
        </div>
        <div id="app">
            <App></App>
        </div>
    @show
@endsection