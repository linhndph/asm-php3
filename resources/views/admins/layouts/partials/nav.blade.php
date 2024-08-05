<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="https://html.phoenixcoded.net/light-able/bootstrap//images/logo-dark.svg" alt="logo image"
                    class="logo-lg" />
                <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.2.0</span>
            </a>
        </div>
        <li class="pc-item pc-caption">
          <a href="{{route('home')}}">Vào trang web</a>
            <i class="ph-duotone ph-gauge"></i>
        </li>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Quản trị danh mục tin</label>
                    <i class="ph-duotone ph-gauge"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.index') }}"
                        class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-projector-screen-chart"></i>
                        </span>
                        <span class="pc-mtext">Danh mục</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Quản trị tin tức</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li>

                <li class="pc-item">
                    <a href="{{ route('admin.indextt') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-identification-card"></i>
                        </span>
                        <span class="pc-mtext">Tin tức</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('..//images/user/avatar-1.jpg') }}" alt="user-image"
                            class="user-avtar wid-45 rounded-circle" />
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="dropdown">
                            <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="0,20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <h6 class="mb-0">Duy Linh</h6>
                                        <small>Người quản lý</small>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="btn btn-icon btn-link-secondary avtar">
                                            <i class="ph-duotone ph-windows-logo"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-user"></i>
                                            <span>My Account</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-gear"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-lock-key"></i>
                                            <span>Lock Screen</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
