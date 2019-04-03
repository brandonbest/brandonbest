<nav class="container navbar navbar-primary navbar-light navbar-expand-lg">
    <a class="navbar-brand d-none d-sm-block" href="{{ route('home') }}">
        <img src="{{ url('/images/logos/brandon-best.png') }}" height="40" alt="Brandon Best" />
    </a>
    <a class="navbar-brand d-sm-none" href="{{ route('home') }}">
        <img src="{{ url('/images/logos/brandon-best-icon.png') }}" height="40" alt="Brandon Best" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
        <ul class="navbar-nav">
            <li class="nav-item {{ Route::currentRouteName() === 'skills' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('skills') }}">Skills @if(Route::currentRouteName() === 'skills')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'experience' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('experience') }}">Experience @if(Route::currentRouteName() === 'about')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item d-lg-none {{ Route::currentRouteName() === 'services' ? 'active' : '' }}">
                <a class="nav-link" href={{ route('services') }}>Services @if(Route::currentRouteName() === 'services')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item d-lg-none {{ Route::currentRouteName() === 'portfolio' ? 'active' : '' }}">
                <a class="nav-link" href={{ route('portfolio') }}>Portfolio @if(Route::currentRouteName() === 'portfolio')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item d-lg-none {{ Route::currentRouteName() === 'websites' ? 'active' : '' }}">
                <a class="nav-link" href={{ route('websites') }}>Websites @if(Route::currentRouteName() === 'websites')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item d-lg-none {{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">
                <a class="nav-link" href={{ route('blog') }}>Blog @if(Route::currentRouteName() === 'blog')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'resume' ? 'active' : '' }}">
                <a class="nav-link" href={{ route('resume') }}>Resume @if(Route::currentRouteName() === 'resume')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">About Me @if(Route::currentRouteName() === 'about')<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                <a class="nav-link" href={{ route('contact') }}>Contact @if(Route::currentRouteName() === 'contact')<span class="sr-only">(current)</span>@endif</a>
            </li>
        </ul>
    </div>
</nav>