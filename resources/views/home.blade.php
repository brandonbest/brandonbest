@extends('layout.public')

@section('body')
    <div class="container-home-first">
        <div class="background-white"></div>
        <div class="container container-fluid">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="card-deck text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('services') }}"></a>
                                    <h5 class="card-icon"><i class="fas fa-cogs"></i></h5>
                                    <h5 class="card-title">Services</h5>
                                    <p class="card-text">How can Brandon help you?</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('experience') }}"></a>
                                    <h5 class="card-icon"><i class="fas fa-award"></i></h5>
                                    <h5 class="card-title">Experience</h5>
                                    <p class="card-text">What has Brandon done in his career?</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('portfolio') }}"></a>
                                    <h5 class="card-icon"><i class="fas fa-laptop-code"></i></h5>
                                    <h5 class="card-title">Portfolio</h5>
                                    <p class="card-text">See all of Brandon's work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-home-second pt-7 pb-7">
        <div class="container">
            <div class="media">
                <img src="{{ url('/images/content/best-family.jpg') }}" class="mr-3" alt="Best Family" />
                <div class="media-body">
                    <h2 class="mt-0">About Brandon</h2>
                    <p>Brandon has had opportunites to develop many skills over his career including: marketing, seo, sales, website design, server management web development and leadership.</p>
                    <p>Brandon lives in Gilbert, Arizona with his wife Amanda and daughter Isla.</p>
                    <a href="{{ route('about') }}" class="btn btn-dark">Learn More</a>
                    <a href="{{ route('experience') }}" class="btn btn-outline-dark">Experience</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-home-third pt-5 pb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    Slide 1
                </div>
                <div class="carousel-item">
                </div>
                <div class="carousel-item">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endsection