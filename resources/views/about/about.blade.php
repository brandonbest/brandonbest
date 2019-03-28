@extends('layout.public')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'About Brandon', 'subtitle' => 'Who is Brandon?', 'icon' => 'far fa-user-circle'])
            </div>
        </div>

        <div class="row mb-6">
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <img src="{{ url('/images/content/brandon-education.jpg') }}" alt="Brandon Best Education" class="img-fluid" />
            </div>
            <div class="timeline col-md-6 col-sm-12">
                <h2>Education</h2>

                {{-- FIRST SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">4</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Point Loma</h5>
                        <p class="m-0">Degree: Biochemistry</p>
                        <p class="m-0">Graduated cum laude</p>
                    </div>
                </div>
                {{-- FIRST SECTION --}}

                @include('components.timeline.left-right')

                {{-- SECOND SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-6 text-right">
                        <h5 class="m-0">Bond University</h5>
                        <p class="m-0">Studied abroad in Australia, focused biochemistry and imunology.</p>
                    </div>
                    <div class="col-2 text-center right full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">3</div>
                    </div>
                </div>
                {{-- SECOND SECTION --}}

                @include('components.timeline.right-left')

                {{-- THIRD SECTION --}}
                <div class="row align-items-center timeline-end d-flex">
                    <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0">Saguaro High School</h5>
                        <p class="m-0">Graduted in top 5% of class of 370+.</p>
                    </div>
                </div>
                {{-- THIRD SECTION --}}

                @include('components.timeline.left-right')

                {{-- FOURTH SECTION --}}
                <div class="row align-items-center justify-content-end timeline-end d-flex">
                    <div class="col-6 text-right">
                        <h5 class="m-0">Grayslake Middle School</h5>
                    </div>
                    <div class="col-2 text-center top right d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1</div>
                    </div>
                </div>
                {{-- FOURTH SECTION --}}
            </div>
        </div>
    </div>

    <div class="container-fluid container-dark pt-6 pb-6 mb-6">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <h2>Family</h2>
                    <p>Brandon grew up in Grayslake, Illinois and Scottsdale, Arizona with 3 younger brothers. His parents still live in Scottsdale, but his brothers moved to Los Angeles and Dallas.</p>
                    <p>He met his wife, Amanda, in 2014. They married in 2015 and had their first child in July 2017.</p>
                    <p>Brandon and Amanda host weekly gatherings for young adults in their home and stay physically active.</p>
                </div>
                <div class="col-md-6 offset-md-1 col-sm-12">
                    <img src="{{ url('/images/content/brandon-family-hiking.jpg') }}" alt="Brandon Best Family" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mb-6">
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <img src="{{ url('/images/content/brandon-hobbies.jpg') }}" alt="Brandon Best Hobbies" class="img-fluid" />
            </div>
            <div class="col-md-5 offset-md-1 col-sm-12">
                <h2>Hobbies</h2>
                <p>Brandon recharges his batteries by spending time outside in nature. His favorite activites include hiking, backpacking and skiing. After the birth of Isla, Brandon and Amanada take Isla on monthly hikes with Isla riding on Brandon's back.</p>
                <p>When Brandon is home for a weekend, he enjoys spending his free time landscaping and woodworking. He designed and installed his entire backyard including pavers, a gas fire pit, raised gardening beds and an archway to grow grapes. He is currently adding trim throughout the Best home.</p>
                <p>
                    <a href="" class="btn btn-primary">Hiking</a>
                    <a href="" class="btn btn-outline-primary">Backyard</a>
                    <a href="" class="btn btn-outline-primary">Wood Work</a>
                </p>
            </div>
            <div class="col-md-6 col-sm-12 d-md-none">
                <img src="{{ url('/images/content/brandon-hobbies.jpg') }}" alt="Brandon Best Hobbies" class="img-fluid" />
            </div>
        </div>
    </div>
@endsection