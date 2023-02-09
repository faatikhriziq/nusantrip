<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo d-flex">
                <a href="index.html" class="d-flex justify-content-center align-items-center">
                    <h2> Nusantara<span class="text-primary">Trip</span></h2> <span
                        class="font-weight-bold mx-3 text-xl">-</span> <span style="font-size: 20px"> Dashboard
                        Admin</span>
                </a>
            </div>
            <div class="header-top-right">
                <div class="dropdown">
                    <a href="#" id="topbarUserDropdown"
                        class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="Avatar" />
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                            <p class="user-dropdown-status text-sm text-muted text-uppercase">
                                {{ Auth::user()->level }}
                            </p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">My Account</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul>
                <li class="menu-item ">
                    <a href="/dashboard"
                        class="menu-link {{ Request::routeIs('dashboard*') ? 'btn btn-sm bg-white px-3 py-2 text-primary' : '' }} ">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>

                </li>

                <li class="menu-item ">
                    <a href="#"
                        class="menu-link
                        @if (Request::routeIs('kategori-wisata') || Request::routeIs('wisata'))
                            {{ 'btn btn-sm bg-white px-3 py-2 text-primary' }}
                        {{-- @elseif (Request::routeIs('kategori-wisata'))
                            {{ 'btn btn-sm bg-white px-3 py-2 text-primary' }} --}}
                        @endif  ">
                        <i class="bi bi-stack"></i>
                        <span>Wisata</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item">
                                    <a href="kategori-wisata" class="submenu-link">Kategori Wisata</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="wisata" class="submenu-link">Wisata</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu-item active ">
                    <a href="#"
                       class="menu-link
                        @if (Request::routeIs('fasilitas-hotel') || Request::routeIs('hotel'))
                            {{ 'btn btn-sm bg-white px-3 py-2 text-primary' }}
                        {{-- @elseif (Request::routeIs('kategori-wisata'))
                            {{ 'btn btn-sm bg-white px-3 py-2 text-primary' }} --}}
                        @endif  ">
                        <i class="bi bi-house-fill"></i>
                        <span>Hotel</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item">
                                    <a href="hotel" class="submenu-link">Hotel</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="fasilitas-hotel" class="submenu-link">Fasilitas Hotel</a>
                                </li>


                            </ul>
                        </div>
                    </div>

                </li>

                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Tour Guide</span>
                    </a>

                </li>

                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <i class="bi bi-table"></i>
                        <span>User Management</span>
                    </a>

                </li>

                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <i class="bi bi-plus-square-fill"></i>
                        <span>Extras</span>
                    </a>

                </li>

                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <i class="bi bi-file-earmark-fill"></i>
                        <span>Pages</span>
                    </a>

                </li>

                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <i class="bi bi-life-preserver"></i>
                        <span>Support</span>
                    </a>

                </li>
            </ul>
        </div>
    </nav>
</header>
