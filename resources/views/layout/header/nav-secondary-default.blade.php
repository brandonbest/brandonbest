<nav class="navbar navbar-secondary navbar-dark navbar-expand-lg d-none d-lg-block">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::currentRouteName() === 'services' ? 'active' : '' }}">
                    <a class="nav-link" href={{ route('services') }}>Services</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() === 'portfolio' ? 'active' : '' }}">
                    <a class="nav-link" href={{ route('portfolio') }}>Portfolio</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() === 'websites' ? 'active' : '' }}">
                    <a class="nav-link" href={{ route('websites') }}>Websites</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">
                    <a class="nav-link" href={{ route('blog') }}>Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>