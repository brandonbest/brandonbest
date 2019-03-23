<div class="page-sidebar-title mt-4 mb-1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if (isset($pretitle) AND $pretitle)
                <p>{!! $pretitle !!}</p>
            @endif

            @if(isset($title) AND $title)
                <h1 class="mb-0"><span class="text-blue">{!! str_replace(preg_replace("/^(\w+\s)/", "", $title), "", $title) !!}</span> {!! preg_replace("/^(\w+\s)/", "", $title) !!}</h1>
            @endif

            @if (isset($subtitle) AND $subtitle)
                <p>{!! $subtitle !!}</p>
            @endif
        </div>
    </div>
</div>