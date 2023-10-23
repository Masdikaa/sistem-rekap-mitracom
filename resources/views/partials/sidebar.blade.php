{{-- SIDEBAR KIRI --}}
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="font-semibold text-dual" href="/">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">Mitra<span class="fw-normal">com</span></span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                <i class="far fa-moon"></i>
            </a>
            <!-- END Dark Mode -->

            <!-- Options -->
            <div class="dropdown d-inline-block ms-1">
                <a class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" href="#">
                    <i class="fa fa-brush"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <!-- Sidebar Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                        <span>Sidebar Dark</span>
                    </a>
                    <!-- END Sidebar Styles -->

                    <div class="dropdown-divider"></div>

                    <!-- Header Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                        <span>Header Dark</span>
                    </a>
                    <!-- END Header Styles -->
                </div>
            </div>
            <!-- END Options -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">

            <ul class="nav-main">
                {{-- @can('viewAdminPanel', auth()->user()) --}}

                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                        <i class="nav-main-link-icon bi bi-house"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('rekapitulasi') ? ' active' : '' }}" href="/rekapitulasi">
                        <i class="nav-main-link-icon bi bi-clipboard-data"></i>
                        <span class="nav-main-link-name">Rekapitulasi</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('input-service') ? ' active' : '' }}" href="/input-service">
                        <i class="nav-main-link-icon bi bi-folder-plus"></i>
                        <span class="nav-main-link-name">Input Service</span>
                    </a>
                </li>

                <li class="nav-main-heading">Data Master</li>
                <li class="nav-main-item{{ request()->is('*') ? ' open' : '' }}">

                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <i class="nav-main-link-icon bi bi-journal-plus"></i>
                        <span class="nav-main-link-name">Tambahkan Data</span>
                    </a>

                    <ul class="nav-main-submenu">
                        @can('viewAdminPanel', auth()->user())
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('datamaster-user') ? ' active' : '' }}" href="/datamaster-user">
                                <span class="nav-main-link-name">User</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('datamaster-kategori') ? ' active' : '' }}" href="/datamaster-kategori">
                                <span class="nav-main-link-name">Kategori</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('datamaster-barang') ? ' active' : '' }}" href="/datamaster-barang">
                                <span class="nav-main-link-name">Barang</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-main-heading">More</li>
                <li class="nav-main-item open">
                    <a class="nav-main-link" href="/">
                        <i class="nav-main-link-icon si si-globe"></i>
                        <span class="nav-main-link-name">Landing</span>
                    </a>
                </li>
            </ul>
            {{-- @endcan --}}
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
