<header class="navbar sticky-top bg-body-tertiary flex-md-nowrap p-0 shadow">
    <a href="{{ route('admin-home') }}" class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white">
        <img src="{{ asset('assets/img/diagram-stats.png') }}" alt="Logo" width="40" height="34" class="d-inline-block align-text-top"> CES Admin Dashboard
    </a>

    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list-task text-body-tertiary"></i>
            </button>
        </li>
    </ul>
</header>