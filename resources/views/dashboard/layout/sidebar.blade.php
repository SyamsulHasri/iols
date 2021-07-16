<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('system.index')}}">
            <span class="align-middle">
                <img class="img-fluid img-thumbnail" src="{{asset('theme/img/logo-1.png')}}" style="background-color:transparent;" alt="">
            </span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu Utama
            </li>

            <li class="sidebar-item {{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
                <a class="sidebar-link" href="{{route('system.index')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::segment(2) === 'profile' ? 'active' : null }}">
                <a class="sidebar-link" href="{{route('profile.view')}}">
                    <i class="align-middle fas fa-user-cog"></i> <span class="align-middle">Profil</span>
                </a>
            </li>
            @if(auth()->user()->member_type != 'Admin')
                <li class="sidebar-item {{ Request::segment(2) === 'shop' ? 'active' : null }}">
                    <a class="sidebar-link" href="{{route('shop.view')}}">
                        <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Beli Produk</span>
                    </a>
                </li>
            
            
                <li class="sidebar-item {{ Request::segment(1) === '/' ? 'active' : null }}">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle fas fa-wallet"></i> <span class="align-middle">E-Wallet</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::segment(1) === '/' ? 'active' : null }}">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="link"></i> <span class="align-middle">Pautan Rujukan</span>
                    </a>
                </li>
            @endif

            @if(auth()->user()->member_type === 'Admin')
                <li class="sidebar-header">
                    Pentadbir
                </li>
                <li class="sidebar-item {{ Request::segment(2) === 'admin' ? 'active' : null }} {{ Request::segment(2) === 'distributor' ? 'active' : null }}">
                    <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle fas fa-users-cog"></i> <span class="align-middle">Pendaftaran</span>
                    </a>
                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.view')}}">Senarai Pentadbir</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{route('distributor.view')}}">Senarai Pengedar</a></li>
                    </ul>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle fas fa-dolly-flatbed" ></i> <span class="align-middle">Pesanan Produk</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle fas fa-boxes" ></i> <span class="align-middle">Produk</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle fas fa-hand-holding-usd" ></i> <span class="align-middle">Pengurusan E-Wallet</span>
                    </a>
                </li>
            @endif
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