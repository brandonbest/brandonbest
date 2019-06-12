@extends('layout.public')

@section('body')
<div class="container-fluid container-error">
    <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
            <h1>404 <span>Error</span></h1>
            <p>You have reached a page that does not exist! Use one of the links below to get back on track.</p>
            <p>&nbsp;</p>
            @include('errors._links')
        </div>
    </div>
</div>
@endsection