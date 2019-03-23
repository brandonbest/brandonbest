<div class="page-title mt-3 mb-3">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 d-flex align-items-center">
            <i class="{{ $icon }}"></i>
        </div>
        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10">
            @if (isset($pretitle) AND $pretitle)
                <p>{{ $pretitle }}</p>
            @endif

            @if(isset($title) AND $title)
                <h1 class="mb-0">{{ $title }}</h1>
            @endif

            @if (isset($subtitle) AND $subtitle)
                <p>{{ $subtitle }}</p>
            @endif
        </div>
    </div>
</div>