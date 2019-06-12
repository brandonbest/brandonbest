@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Backyard', 'subtitle' => 'Custom Backyard', 'icon' => 'fas fa-tree'])
            </div>
        </div>
    </div>

    @include('components.coming-soon')

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('about.hiking') }}" class="btn btn-lg btn-primary">< Hiking</a>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('about.wood-working') }}" class="btn btn-lg btn-primary">Wood Working ></a>
            </div>
        </div>
    </div>
@endsection