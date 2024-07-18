<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url('admin') }}/assets/images/logo.ico" />

    <!-- FontAwesome JS-->
    <script defer src="{{ url('admin') }}/assets/plugins/fontawesome/js/all.min.js"></script>
    {{-- {{ url('admin') }}/{{ url('admin') }}/assets/ --}}
    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ url('admin') }}/assets/css/portal.css" />
    <title>RSP IZI SUMBAR</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>

<body class="app">

    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>
                        <!--//col-->
                        <div class="search-mobile-trigger d-sm-none col">
                            <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
                        </div>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @else
                            <div class="app-utilities col-auto">
                                <div class="app-utility-item app-user-dropdown dropdown">
                                    @if (Auth::user()->role != 'admin')
                                    @else
                                        <a class="dropdown-toggle" id="us er-dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->rsp }}
                                        </a>
                                    @endif
                                    @if (Auth::user()->role != 'pengunjung')
                                    @else
                                        <a class="dropdown-toggle" id="user-dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                    @endif
                                    <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('login') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>
                                        </li>

                                        {{-- <form id="logout-form" action="{{ route('landing.index2') }}" class="d-none"> --}}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            @endguest
                        </div>
                    </div>
                    <!--//row-->
                </div>
                <!--//app-header-content-->
            </div>
            <!--//container-fluid-->
        </div>
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href="#"><img class="logo-icon me-2"
                            src="{{ url('admin') }}/assets/images/logo.png" alt="logo" /><span
                            class="logo-text">RSP
                            IZI SUMBAR</span></a>
                </div>
                <!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        {{-- home --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                        <path fill-rule="evenodd"
                                            d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Home</span>
                            </a><!--//nav-link-->
                        </li>
                        <!--//nav-pendaftaran-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="/reservasi">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path fill-rule="evenodd"
                                            d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                        <circle cx="3.5" cy="5.5" r=".5" />
                                        <circle cx="3.5" cy="8" r=".5" />
                                        <circle cx="3.5" cy="10.5" r=".5" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Pendaftaran</span> </a><!--//nav-link-->
                        </li>
                        @if (Auth::user()->role != 'admin')
                        @else
                            <!--//nav-kamar-->
                            <li class="nav-item">
                                <a class="nav-link" href="/kamar">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                                            <path fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Data Kamar</span> </a><!--//nav-link-->
                            </li>
                            <!--//nav-penghuni-->
                            <li class="nav-item has-submenu">
                                <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-1">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                                            <path
                                                d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Daftar Penghuni</span>
                                    <span class="submenu-arrow">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-chevron-down" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span><!--//submenu-arrow-->
                                </a><!--//nav-link-->
                                <div id="submenu-2" class="collapse submenu submenu-1"
                                    data-bs-parent="#menu-accordion">
                                    <ul class="submenu-list list-unstyled">
                                        <li class="submenu-item">
                                            <a class="submenu-link" href="/pasien">Pasien</a>
                                        </li>
                                        <li class="submenu-item">
                                            <a class="submenu-link" href="/pendamping">Pendamping</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- donasi --}}
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="/donasi">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-coin"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Donasi</span>
                                </a><!--//nav-link-->
                            </li>
                            {{-- laporan --}}
                            <li class="nav-item has-submenu">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-bar-chart-line" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Laporan</span>
                                    <span class="submenu-arrow">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-chevron-down" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span><!--//submenu-arrow-->
                                </a><!--//nav-link-->
                                <div id="submenu-1" class="collapse submenu submenu-1"
                                    data-bs-parent="#menu-accordion">
                                    <ul class="submenu-list list-unstyled">
                                        <li class="submenu-item"><a class="submenu-link" href="/laporanpasien">Daftar
                                                Pasien</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                        <!--//nav-penghuni-->
                        @if (Auth::user()->role != 'admin')
                                    @else
                        <li class="nav-item has-submenu">
                            <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                data-bs-target="#submenu-5" aria-expanded="false" aria-controls="submenu-1">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                        <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </span>
                                </span class=nav-link-text>Profile</span>
                                <span class="submenu-arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-chevron-down" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span><!--//submenu-arrow-->
                            </a><!--//nav-link-->
                            <div id="submenu-5" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    
                                        <li class="submenu-item">
                                            <a class="nav-link" href="{{ route('user.index') }}">Daftar Pengunjung
                                            </a>
                                        </li>
                                        <li class="submenu-item">
                                            <a class="submenu-link" href="/pengaturan-profile">Pengaturan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--nav profil-->
                            @endif
                    </ul>
                    <!--//app-menu-->
                </nav>
                <!--//app-sidepanel-footer-->
            </div>
            <!--//sidepanel-inner-->
        </div>
    </header>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ url('admin') }}/assets/plugins/popper.min.js"></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Charts JS -->
    <script src="{{ url('admin') }}/assets/plugins/chart.js/chart.min.js"></script>
    <script src="{{ url('admin') }}/assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="{{ url('admin') }}/assets/js/app.js"></script>
    <!-- Charts JS -->
    <script src="{{ url('admin') }}/assets/plugins/chart.js/chart.min.js"></script>
    <script src="{{ url('admin') }}/assets/js/charts-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}

</body>

</html>
