<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ asset('/assets') }}/index.html">
            <img src="{{ asset('/assets') }}/images/brand/logo/logo.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page ===  'dashboard') { active }" href="{{ url('/') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Menu Penjualan</div>
            </li>

            <li class="nav-item">
                <a class="nav-link @@if (context.page === 'layouts') { active }"
                    href="{{ route('master-barang.index') }}">
                    <i class="nav-icon icon-xs me-2 bi bi-table">
                    </i>
                    Data Penjualan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @@if (context.page === 'layouts') { active }"
                    href="{{ route('master-barang.create') }}">
                    <i data-feather="plus-square" class="nav-icon icon-xs me-2">
                    </i>
                    Tambah Data Penjualan
                </a>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Documentation</div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://github.com/ekomh170" target="_blank">
                    <i data-feather="github" class="nav-icon icon-xs me-2">
                    </i> My Github
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://gitlab.com/ekomh170">
                    <i data-feather="gitlab" class="nav-icon icon-xs me-2" target="_blank">
                    </i> My Gitlab
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://github.com/ekomh170/aplikasi_data_penjualan.git">
                    <i data-feather="book" class="nav-icon icon-xs me-2" target="_blank">
                    </i> Dokumentasi
                </a>
            </li>




        </ul>

    </div>
</nav>