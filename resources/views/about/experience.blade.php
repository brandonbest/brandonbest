@extends('layout.public')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'My Experience', 'subtitle' => 'What has Brandon done?', 'icon' => 'fas fa-award'])
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="timeline col">

                {{-- FIRST SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-server"></i></div>
                    </div>
                    <div class="col-9">
                        <h5 class="m-0">Automated Deployment and Containers</h5>
                        <p class="m-0">Building and Deploying Docker containers on multiple workstations</p>
                    </div>
                </div>
                {{-- FIRST SECTION --}}

                @include('components.timeline.left-right')

                {{-- SECOND SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-9 text-right">
                        <h5 class="m-0">Leadership</h5>
                        <p class="m-0">Managing Developer Teams</p>
                    </div>
                    <div class="col-2 text-center right full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-users"></i></div>
                    </div>
                </div>
                {{-- SECOND SECTION --}}

                @include('components.timeline.right-left')

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-keyboard"></i></div>
                    </div>
                    <div class="col-9">
                        <h5 class="m-0">Programming</h5>
                        <p class="m-0">PHP and JS within Wordpress and Laravel</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                @include('components.timeline.left-right')

                {{-- FOURTH SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-9 text-right">
                        <h5 class="m-0">Website Design</h5>
                        <p class="m-0">Creating and Modifying Website Templates</p>
                    </div>
                    <div class="col-2 text-center right full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-palette"></i></div>
                    </div>
                </div>
                {{-- FOURTH SECTION --}}

                @include('components.timeline.right-left')

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-server"></i></div>
                    </div>
                    <div class="col-9">
                        <h5 class="m-0">Server Setup</h5>
                        <p class="m-0">cPanel and Command Line Server Management</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                @include('components.timeline.left-right')

                {{-- FOURTH SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-9 text-right">
                        <h5 class="m-0">Marketing</h5>
                        <p class="m-0">SEO and Social Media</p>
                    </div>
                    <div class="col-2 text-center top right d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-broadcast-tower"></i></div>
                    </div>
                </div>
                {{-- FOURTH SECTION --}}

                @include('components.timeline.right-left')

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-comment-dollar"></i></div>
                    </div>
                    <div class="col-9">
                        <h5 class="m-0">Sales</h5>
                        <p class="m-0">Education, Websites and IT Services</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                @include('components.timeline.left-right')

                {{-- FOURTH SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-9 text-right">
                        <h5 class="m-0">CNA</h5>
                        <p class="m-0">Patience and Kindness</p>
                    </div>
                    <div class="col-2 text-center top right d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-stethoscope"></i></div>
                    </div>
                </div>
                {{-- FOURTH SECTION --}}

                @include('components.timeline.right-left')

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold"><i class="fas fa-code"></i></div>
                    </div>
                    <div class="col-9">
                        <h5 class="m-0">Basic HTML & CSS</h5>
                        <p class="m-0">Coding an HTML Page with Tables and CSS</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}
            </div>
        </div>
    </div>

    <div class="container mt-6">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Companies', 'subtitle' => 'Brandon\'s Work History', 'icon' => 'far fa-building'])
            </div>
        </div>
    </div>

    <div class="container mb-6">
        <div class="row">
            <div class="col">
                <div class="card-deck">
                    <div class="card">
                        <img src="{{ url('/images/content/bisnow.jpg') }}" class="card-img-top" alt="Bisnow">
                        <div class="card-body">
                            <h5 class="card-title">Bisnow</h5>
                            <p class="card-text">Built the current website, migrated between multiple email marketing platforms, and managed a team up to 2 developers.</p>
                            <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ url('/images/content/dream-ideation.jpg') }}" class="card-img-top" alt="Dream Ideation">
                        <div class="card-body">
                            <h5 class="card-title">Dream Ideation</h5>
                            <p class="card-text">This is Brandon's company. Acted as the president and lead on all projects. Hired and successfully managed 2 employees.</p>
                            <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ url('/images/content/rich-hessler-solar.jpg') }}" class="card-img-top" alt="Rich Hessler Solar">
                        <div class="card-body">
                            <h5 class="card-title">Rich Hessler Solar</h5>
                            <p class="card-text">Designed and built the website, developed a process for launching websites for solar companies, ran marketing efforts and sold websites/education.</p>
                            <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ url('/images/content/mesa-public-schools.jpg') }}" class="card-img-top" alt="Mesa Public Schools">
                        <div class="card-body">
                            <h5 class="card-title">Mesa Public Schools</h5>
                            <p class="card-text">Added HTML and CSS to online education courses using Dreamweaver.</p>
                            <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection