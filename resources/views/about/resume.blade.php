@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'The Resume', 'subtitle' => 'Download a PDF Version Below?', 'icon' => 'far fa-file-alt'])
            </div>
        </div>
    </div>
@endsection