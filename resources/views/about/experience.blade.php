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
            <div class="col">
                <h2>Skills</h2>
                <p>Leadership</p>
                <p>Programming</p>
                <p>Website Design</p>
                <p>Sales & Marketing</p>
                <p>CNA (Certified Nursing Assistant)</p>
                <p>Basic HTML & CSS</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Companies</h2>
                <p>Bisnow</p>
                <p>Dream Ideation</p>
                <p>Rich Hessler Solar</p>
                <p>Mesa School District</p>
            </div>
        </div>
    </div>
@endsection