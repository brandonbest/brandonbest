@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Brandon\'s Blog', 'subtitle' => 'What\'s Happening in My World?', 'icon' => 'fas fa-paperclip'])
            </div>
        </div>
    </div>

    @include('components.coming-soon')
@endsection