<section id="navigation" data-bs-version="5.1" class="menu menu2 cid-uftRsmAGrx" once="menu" id="menu-5-uftRsmAGrx">


    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height:5.5rem;">
                    </a>
                </span>
                {{-- <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4"
                        href="{{ route('home') }}">Texlink</a></span> --}}
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item ">
                        <a class="nav-link link text-black display-4 {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link link text-black display-4 {{ Request::is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}" aria-expanded="false">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link link text-black display-4 {{ Request::is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
