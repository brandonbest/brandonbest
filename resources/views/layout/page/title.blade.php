<div class="d-flex flex-row page-title mt-4 mb-4">
    <div class="d-flex align-items-center justify-content-center">
        <i class="{{ $icon }}"></i>
    </div>
    <div class="pl-3 pr-3">
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