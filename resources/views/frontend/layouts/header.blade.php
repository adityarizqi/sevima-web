<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ url('assets/web/images/logo.png') }}" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{ route('home') }}">Beranda</a></li>
                    <li><a class="nav-link" href="{{ route('page', 'about') }}">Tentang</a></li>
                    <li><a class="nav-link" href="{{ route('page', 'author') }}">Guru</a></li>
                    <li><a class="nav-link" href="{{ route('page', 'course') }}">Kursus</a></li>
                    @auth
                    <li><a class="nav-link" href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    @endauth
                    @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Masuk</a></li>
                    @endguest
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="search-txt" placeholder="Search">
                <a class="search-btn">
                    <img src="{{ url('assets/web/images/search_icon.png') }}" alt="#" />
                </a>
            </div>
        </div>
    </nav>
</header>
