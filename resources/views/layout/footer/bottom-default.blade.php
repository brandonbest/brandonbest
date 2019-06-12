<div class="footer-bottom">
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"><img src="{{ url('/images/logos/brandon-best-white-icon.png') }}" alt="Brandon Best" /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sitemap') }}">Site Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal.privacy') }}">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal.terms') }}">Terms of Use</a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Designed by Brandon Best &copy; {{ date('Y') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container d-md-none">
        <div class="row">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"><img src="{{ url('/images/logos/brandon-best-white-icon.png') }}" alt="Brandon Best" /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sitemap') }}">Site Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal.privacy') }}">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal.terms') }}">Terms of Use</a>
                    </li>
                </ul>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link disabled p-0 pb-2" tabindex="-1" aria-disabled="true">Designed by Brandon Best &copy; {{ date('Y') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>