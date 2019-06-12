@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Portfolio', 'subtitle' => 'Brandon\'s Work', 'icon' => 'fas fa-laptop-code'])
            </div>
        </div>
    </div>

    @include('components.coming-soon')
@endsection