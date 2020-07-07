@extends('layout.public')

@section('body')
    <div class="container container-resume mb-1">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'The Resume', 'subtitle' => 'Download a PDF Version Below?', 'icon' => 'far fa-file-alt'])
                <a href="{{ url('resumes/2020-04/brandon-best-resume.pdf') }}" class="btn btn-primary btn-md btn-resume-download">Download</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <img src="{{ url('resumes/2020-04/brandon-best-resume.jpg') }}" alt="Brandon Best Resume" class="img-fluid" />
            </div>
        </div>
    </div>
@endsection