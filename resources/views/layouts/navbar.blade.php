<nav class="navbar bg-primary navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-light" href="#">PT Persuratan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('surat.index') }}">Daftar Surat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('pengirim.index') }}">Daftar Pengirim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('penerima.index') }}">Daftar Penerima</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
