<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">iOLS</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu Utama
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="index.html">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-invoice.html">
                    <i class="align-middle fas fa-wallet"></i> <span class="align-middle">E-Dompet</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-invoice.html">
                    <i class="align-middle" data-feather="link"></i> <span class="align-middle">Pautan Rujukan</span>
                </a>
            </li>

            <li class="sidebar-header">
                Pentadbir
            </li>
            <li class="sidebar-item">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle fas fa-users-cog"></i> <span class="align-middle">Pendaftaran</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.view')}}">Senarai Pentadbir</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('distributor.view')}}">Senarai Pengedar</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle fas fa-boxes" ></i> <span class="align-middle">Produk</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle fas fa-hand-holding-usd" ></i> <span class="align-middle">Pengurusan E-Dompet</span>
                </a>
            </li>
            <!-- <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li> -->
        </ul>

    </div>
</nav>