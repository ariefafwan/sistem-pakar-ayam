<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#page-top">Sistem Pakar</a></li>
        @if ($page === "Selamat Datang")
        <li class="sidebar-nav-item"><a href="#diagnosa">Diagnosa</a></li>
        @else
        <li class="sidebar-nav-item"><a href="{{ route('welcome') }}">Diagnosa</a></li>
        @endif
        <li class="sidebar-nav-item"><a href="{{ route('login') }}">Login</a></li>
    </ul>
</nav>