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
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"><img src="{{ url('/images/content/best-family.jpg') }}" class="img-fluid" alt="Best Family" /></div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="d-lg-none mt-4"><span class="text-white">About</span> Brandon</h2>
                    <h2 class="d-none d-lg-block mt-0"><span class="text-white">About</span> Brandon</h2>
                    <p>Brandon has had opportunites to develop many skills over his career including: marketing, seo, sales, website design, server management web development and leadership.</p>
                    <p>Brandon lives in Gilbert, Arizona with his wife Amanda and daughter Isla.</p>
                    <a href="{{ route('about') }}" class="btn btn-light">Learn More</a>
                    <a href="{{ route('experience') }}" class="btn btn-outline-light">Experience</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-home-third pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-4">Portfolio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            {{-- SLIDE 1 --}}
                            <div class="carousel-item active">
                                <div class="card-deck">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- SLIDE 1 --}}

                            {{-- SLIDE 2 --}}
                            <div class="carousel-item">
                                <div class="card-deck">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- SLIDE 2 --}}

                            {{-- SLIDE 3 --}}
                            <div class="carousel-item">
                                <div class="card-deck">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- SLIDE 3 --}}
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
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('portfolio') }}" class="btn btn-primary mt-4">Full Portfolio</a>
                </div>
            </div>
        </div>
    </div>

@endsection