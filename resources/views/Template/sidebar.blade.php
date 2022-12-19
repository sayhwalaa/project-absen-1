<aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                <img src="/sabang.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-0 font-weight-bold">Sabang Digital Indonesia</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseTwo">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Master Data</span>
                    </a>
                    <ul class="collapse flex-column ms-1" style="list-style: none; margin-top:-10px;" id="collapseOne" data-bs-parent="#menu">
                        <li style="margin-left: -30px;">
                            <a href="/pegawai" class="nav-link">
                                <div
                            class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                            </div>
                                <span class="d-none nav-link d-sm-inline">Pegawai</span>
                            </a>
                        </li>
                        <li style="margin-left: -30px; margin-top:-20px;">
                            <a href="/pengguna" class="nav-link">
                                <div
                            class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                            </div>
                                <span class="d-none nav-link d-sm-inline">Pengguna</span>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/profil">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profil</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link " href="/pegawai">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pegawai</span>
                    </a>
                    <a class="nav-link " href="#">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengguna</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </aside>
