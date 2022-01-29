<div class="navbar fixed-top navbar-fixed-top navbar-expand-lg navbar-light">
    <a href="#" class="navbar-brand ml-3">
        <img src="/asset/img/final logo transparant.png"  alt="" class="img-navbar">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse"></div>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{(request()->is('/')) ? 'active' : ''}}">
                <a href="{{ url('/') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item {{(request()->is('tentang-kami')) ? 'active' : ''}}">
                <a href="{{ route('client.about') }}" class="nav-link">Tentang Kami</a>
            </li>
            <li class="nav-item {{(request()->is('project')) || (request()->is('project-detail'))  ? 'active' : ''}}">
                <a href="{{ route('client.project') }}" class="nav-link">Project</a>
            </li>
            <li class="nav-item {{(request()->is('berita')) || (request()->is('berita-detail')) ? 'active' : ''}}">
                <a href="{{ route('client.news') }}" class="nav-link">Berita</a>
            </li>
            <li class="nav-item {{(request()->is('hubungi-kami')) ? 'active' : ''}}">
                <a href="{{ route('client.contact') }}" class="nav-link">Hubungi Kami</a>
            </li>

        </ul>
    </div>
</div>