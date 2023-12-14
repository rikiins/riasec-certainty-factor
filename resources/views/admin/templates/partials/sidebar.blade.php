<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">CES Admin Dashboard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin-home') }}" class="nav-link d-flex gap-2 active" aria-current="page">
                                <i class="bi bi-speedometer"></i>
                                Ringkasan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rules') }}" class="nav-link d-flex gap-2">
                                <i class="bi bi-database-gear"></i> CF Rules
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link d-flex gap-2">
                                <i class="bi bi-people"></i> Pengguna
                            </a>
                        </li>
                    </ul>

                    <hr class="my-3">

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link text-danger d-flex gap-2 dropdown-item">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>

                    <hr class="my-3">

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <p class="nav-link text-body-tertiary d-flex gap-2">
                                <i class="bi bi-person-circle"></i> {{ auth()->user()->username }}
                            </p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="admin-dashboard-content">
            @yield('content')
        </main>
    </div>
</div>