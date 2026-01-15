<!-- ======= Sidebar ======= -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2"
    id="sidenav-main">

    <!-- Logo -->
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>

        <a class="navbar-brand px-4 py-3 m-0" href="#">
            <img src="{{ asset('backendassets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26"
                alt="logo">
            <span class="ms-1 text-sm text-dark">Creative Tim</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0 mb-2">

    <!-- Menu -->
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link active bg-gradient-dark text-white" href="#">

                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- Primary Setting Dropdown -->
            <li class="nav-item">
                <a class="nav-link text-dark collapsed" data-bs-toggle="collapse" href="#primarySetting" role="button"
                    aria-expanded="false" aria-controls="primarySetting">

                    <span class="nav-link-text ms-1">Primary Setting</span>
                    <i class="material-symbols-rounded ms-auto text-xs">expand_more</i>
                </a>

                <div class="collapse" id="primarySetting">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">General Settings</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">User Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Secondary Setting Dropdown -->
            <li class="nav-item">
                <a class="nav-link text-dark collapsed" data-bs-toggle="collapse" href="#secondarySetting" role="button"
                    aria-expanded="false" aria-controls="secondarySetting">

                    <span class="nav-link-text ms-1">Secondary Setting</span>
                    <i class="material-symbols-rounded ms-auto text-xs">expand_more</i>
                </a>

                <div class="collapse" id="secondarySetting">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('carousel.index') }}">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Carousel</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Feature Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('about.index') }}">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('status.index') }}">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Status</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('skill.index') }}">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Skills</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Testimonials</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Portfolio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Team</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Pricing</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">F.A.Q</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="sidenav-mini-icon">•</span>
                                <span class="sidenav-normal">Contact</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Section Title -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">
                    Account Pages
                </h6>
            </li>

            <!-- Profile -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="material-symbols-rounded opacity-5">person</i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

            <!-- Sign In -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="material-symbols-rounded opacity-5">login</i>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>

            <!-- Sign Up -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="material-symbols-rounded opacity-5">assignment</i>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>

        </ul>
    </div>


</aside>
<!-- ======= End Sidebar ======= -->
