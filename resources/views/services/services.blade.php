@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'My Services', 'subtitle' => 'What Brandon Can Do For You', 'icon' => 'fas fa-cogs'])
            </div>
        </div>
    </div>

    @include('components.coming-soon')
@endsection