<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="index.html" class="logo">
            <span>
                <img src="{{ asset('admin/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span class="">
                <img src="{{ asset('admin/images/logo-light.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('admin/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <!-- <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small> -->
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("admin.dashboard") ? 'active' : '' }}" href="{{ route("admin.dashboard") }}" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>Tableau de bord</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("admin.formations") ? 'active' : '' }}" href="{{ url('/adm/formations') }}" role="button"
                            aria-expanded="false" aria-controls="sidebarApplications">
                            <i class="iconoir-view-grid menu-icon"></i>
                            <span>Gestion des formations</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("admin.formateurs") ? 'active' : '' }}" href="{{ route("admin.formateurs") }}" role="button"
                            aria-expanded="false" aria-controls="sidebarApplications">
                            <i class="iconoir-view-grid menu-icon"></i>
                            <span>Gestion des formateurs</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link  {{ Route::is("admin.sliders") ? 'active' : '' }}" href="{{ route("admin.sliders") }}" role="button">
                            <i class="iconoir-compact-disc menu-icon"></i>
                            <span>Gestion de diaporama</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("admin.students") ? 'active' : '' }}" href="{{ route("admin.students") }}">
                            <i class="iconoir-peace-hand menu-icon"></i>
                            <span>Liste des inscrits</span><span class="badge rounded text-success bg-success-subtle ms-1">New</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("admin.users") ? 'active' : '' }}" href="{{ route("admin.users") }}">
                            <i class="iconoir-home-user menu-icon"></i>
                            <span>Gestion des utilisateurs</span>
                        </a>
                    </li><!--end nav-item-->
                </ul><!--end navbar-nav--->
                <div class="update-msg text-center">
                    <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box  rounded-circle mx-auto">
                        <i class="iconoir-fire-flame h3 align-self-center mb-0 text-primary"></i>
                    </div>
                    <h5 class="mt-3">Mosala.site</h5>
                    <p class="mb-3 text-muted">Bienvenue dans l'espace d'administration de Formations.mosala.site</p>
                </div>
            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div>