@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Active Websites', 'subtitle' => 'Brandon\'s Websites', 'icon' => 'fas fa-desktop'])
            </div>
        </div>
    </div>

    @include('components.coming-soon')
@endsection