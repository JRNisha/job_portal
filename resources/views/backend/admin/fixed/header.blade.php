<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    @if (auth()->user()->role === "admin")
    <a class="navbar-brand ps-3" href="index.html">Admin Panel</a>
    @endif
    @if (auth()->user()->role === "company")
    <a class="navbar-brand ps-3" href="index.html">{{auth()->user()->name}}</a>
    @endif
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <div class="sb-sidenav-footer">

                <li><a class="dropdown-item" href="{{route('admin.logout')}}">{{auth()->user()->name}} ({{auth()->user()->role}}) |Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
