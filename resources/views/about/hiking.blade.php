@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Hiking', 'subtitle' => 'Experience in the Outdoors', 'icon' => 'fas fa-shoe-prints'])
            </div>
        </div>
    </div>

    @include('components.coming-soon')

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('about.wood-working') }}" class="btn btn-lg btn-primary">< Wood Working</a>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('about.backyard') }}" class="btn btn-lg btn-primary">Backyard ></a>
            </div>
        </div>
    </div>
@endsection