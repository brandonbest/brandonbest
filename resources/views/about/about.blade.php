@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'About Brandon', 'subtitle' => 'Who is Brandon?', 'icon' => 'far fa-paper-plane'])
            </div>
        </div>
    </div>
@endsection