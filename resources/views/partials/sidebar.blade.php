<link rel="stylesheet" href="{{ asset('template/dist/css/custom.css') }}">


<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('template/dist/images/logo.png') }}" alt="" height="120">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('template/dist/images/logo.png') }}" alt="" height="120">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('template/dist/images/logo.png') }}" alt="" height="120">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('template/dist/images/logo.png') }}" alt="" height="120">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                {{-- NAV MENU --}}
                <li class="nav-item">
                    
                    <a class="nav-link menu-link " href="#dashboard"  >
                        <i class="fa-solid fa-desktop"></i> <span >Dashboard</span>
                    </a>
                  
                </li>
                <li class="nav-item">
                    <a href="/adminpenghuni" class="nav-link menu-link {{ $title ==='Data Penghuni' ? 'active' : '' }}" data-key="t-analytics">
                        <i class="fa-solid fa-house"></i> <span data-key="t-dashboards" >Room</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminpenghuni" class="nav-link menu-link {{ $title ==='Data Penghuni' ? 'active' : '' }}" data-key="t-analytics">
                        <i class="fa-solid fa-user"></i> <span data-key="t-dashboards" >Tenant</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="/adminpenghuni" class="nav-link menu-link {{ $title ==='Data Penghuni' ? 'active' : '' }}" data-key="t-analytics">
                        <i class="fa-solid fa-wallet"></i> <span data-key="t-dashboards" >Payment</span>
                    </a>
                </li>
                
                <li class="nav-item">

                <a class="nav-link menu-link" href="#sidebarData" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarData">
                <i class="fa-solid fa-database"></i> <span data-key="t-dashboards">Master Data</span>
                </a>
                <div class="collapse menu-dropdown {{ $title==='Data Fasilitas'|| $title === 'Data Kamar' ? 'show' : '' }}" id="sidebarData">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            
                        <a href="/adminfasilitas" class="nav-link {{ $title ==='Data Fasilitas' ? 'active' : '' }}" data-key="t-analytics"> Fasilitas </a>
                        </li>
                        <li class="nav-item">
                            
                        <a href="/adminkamar" class="nav-link {{ $title ==='Data Kamar' ? 'active' : '' }}" data-key="t-analytics"> Kamar </a>
                        </li>

                    </ul>
                </div>

                <!-- Tambahkan menu Penghuni di luar menu Data -->
                

                </li>
                



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>