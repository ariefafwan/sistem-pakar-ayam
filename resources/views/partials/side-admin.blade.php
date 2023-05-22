<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link " href="{{ route('home') }}">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <span class="ml-2">Dashboard</span>
                </a>
                <div class="sb-sidenav-menu-heading">Menu Admin</div>
                <a class="nav-link" href="{{ route('gejala.index') }}">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <span class="ml-2">Gejala</span>
                </a>
                <a class="nav-link" href="{{ route('penyakit.index') }}">
                    <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                    <span class="ml-2">Penyakit</span>
                </a>
                <a class="nav-link" href="{{ route('basis.index') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="ml-2">Basis Pengetahuan</span>
                </a>
                <div class="sb-sidenav-menu-heading">Diagnosa</div>
                <a class="nav-link" href="{{ route('diagnosa.create') }}">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                    <span class="ml-2">Diagnosa</span>
                </a>
            </div>
        </div>
    </nav>
</div>