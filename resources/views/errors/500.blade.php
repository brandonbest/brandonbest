@extends('layout.public')

@section('body')
    <div class="container-fluid container-error">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <h1>500 <span>Error</span></h1>
                <p>This page has an error. I have been notified and will get this corrected.</p>
                <p>&nbsp;</p>
            </div>
            @include('errors._links')
        </div>
    </div>
@endsection