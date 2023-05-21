<div class="position-sticky pt-md-0">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <span class="ml-2">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('gejala.index') }}">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span class="ml-2">Gejala</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('penyakit.index') }}">
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <span class="ml-2">Penyakit</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('basis.index') }}">
                <i class="fa fa-book" aria-hidden="true"></i>
                <span class="ml-2">Basis Pengetahuan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('diagnosa.create') }}">
                <i class="fa fa-search-plus" aria-hidden="true"></i>
                <span class="ml-2">Diagnosa</span>
            </a>
        </li>
    </ul>
</div>
