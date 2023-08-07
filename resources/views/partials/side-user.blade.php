<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link " href="{{ route('home') }}">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <span class="ml-2">Dashboard</span>
                </a>
                <div class="sb-sidenav-menu-heading">Diagnosa</div>
                <a class="nav-link" href="{{ route('diagnosauser.create') }}">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                    <span class="ml-2">Diagnosa</span>
                </a>
                <a class="nav-link" href="{{ route('riwayat.user') }}">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span class="ml-2">Riwayat Diagnosa Anda</span>
                </a>
            </div>
        </div>
    </nav>
</div>