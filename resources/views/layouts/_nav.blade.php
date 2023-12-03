<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm border-bottom border-dark border-3">
    <div class="container">
        <a class="navbar-brand fs-2" href="{{ route('index') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data</a>
                </li>
            </ul>
            <span class="navbar-text">
                Website Rekapan Absensi
            </span>
        </div>
    </div>
</nav>
