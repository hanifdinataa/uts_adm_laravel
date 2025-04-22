<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <!-- Logo We Bare Bears -->
            <a class="navbar-brand" href="/home">
                {{-- <img src="https://upload.wikimedia.org/wikipedia/id/e/ed/Angry_Birds_%28video_games%29_logo.png" alt="We Bare Bears Logo" width="30" height="30" class="d-inline-block align-text-top"> --}}
                APP LARAVEL TEKKOM B
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <!-- Mahasiswa -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
                    </li>

                    <!-- Prodi -->
                    <li class="nav-item">
                        <a class="nav-link active" href="/prodi">Prodi</a>
                    </li>

                    <!-- Dosen -->
                    <li class="nav-item">
                        <a class="nav-link active" href="/dosen">Dosen</a>
                    </li>

                    {{-- Ruangan --}}
                    <li class="nav-item">
                        <a class="nav-link active" href="/ruangan">Ruangan</a>
                    </li>

                    

                    
                </ul>

                <!-- Login and Back to Beginning di sebelah kanan dengan ikon -->
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            {{-- <i class="bi bi-box-arrow-in-right"></i> --}}
                            <img src="img/image.png" alt="" width="30px" height="30px">
                             {{-- Laravel --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Pastikan untuk menambahkan Bootstrap Icons di dalam <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
