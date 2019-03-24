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
                <h2 class="mb-4">Skills</h2>

                {{-- FIRST SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">4</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Leadership</h5>
                        <p class="m-0">Degree: Biochemistry</p>
                        <p class="m-0">Graduated cum laude</p>
                    </div>
                </div>
                {{-- FIRST SECTION --}}

                {{-- PATH BETWEEN 1-2 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 1-2 --}}

                {{-- SECOND SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-6 text-right">
                        <h5 class="m-0">Programming</h5>
                        <p class="m-0">Studied abroad in Australia, focused biochemistry and imunology.</p>
                    </div>
                    <div class="col-2 text-center right full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">3</div>
                    </div>
                </div>
                {{-- SECOND SECTION --}}

                {{-- PATH BETWEEN 2-3 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 2-3 --}}

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Website Design</h5>
                        <p class="m-0">Graduted in top 5% of class of 370+.</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                {{-- PATH BETWEEN 3-4 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 3-4 --}}

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Server Setup</h5>
                        <p class="m-0">Setup and managed servers.</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                {{-- PATH BETWEEN 3-4 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 3-4 --}}

                {{-- FOURTH SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-6 text-right">
                        <h5 class="m-0">Marketing</h5>
                    </div>
                    <div class="col-2 text-center top right d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1</div>
                    </div>
                </div>
                {{-- FOURTH SECTION --}}

                {{-- PATH BETWEEN 2-3 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 2-3 --}}

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Sales</h5>
                        <p class="m-0">Graduted in top 5% of class of 370+.</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                {{-- PATH BETWEEN 3-4 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 3-4 --}}

                {{-- FOURTH SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-6 text-right">
                        <h5 class="m-0">CNA</h5>
                    </div>
                    <div class="col-2 text-center top right d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1</div>
                    </div>
                </div>
                {{-- FOURTH SECTION --}}

                {{-- PATH BETWEEN 2-3 --}}
                <div class="row timeline-item">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>
                {{-- PATH BETWEEN 2-3 --}}

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Basic HTML & CSS</h5>
                        <p class="m-0">Graduted in top 5% of class of 370+.</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}
            </div>
        </div>
    </div>

    <div class="container mb-6">
        <div class="row mt-6 mb-3">
            <div class="col">
                <h2>Companies</h2>
            </div>
        </div>

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