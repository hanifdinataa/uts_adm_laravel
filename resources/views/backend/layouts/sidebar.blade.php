<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
                        <i class="bi bi-speedometer2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/mahasiswa-dashboard">
                        <i class="bi bi-people"></i>
                        Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/prodi-dashboard">
                        <i class="bi bi-collection"></i>
                        Prodi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dosen-dashboard">
                        <i class="bi bi-person"></i>
                        Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/ruangan-dashboard" class="nav-link d-flex align-item-center gap-2" >
                        <i class="bi bi-door-open"></i>
                       Ruangan
                    </a>
                </li>
                
            </ul>
            <hr class="my-3"> {{-- untuk garis --}}
            <ul class="nav flex-column mb-auto">

                

                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link d-flex align-items-center gap-2"> <i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>




                {{-- <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form> --}}

            </ul>
        </div>
    </div>
</div>
