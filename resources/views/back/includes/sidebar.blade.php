@php use Illuminate\Support\Facades\Route; @endphp

<style>
    :root {
        --sidebar-bg: #1a1a1a;
        --sidebar-hover: #2a2a2a;
        --accent-red: #dc3545;
        --accent-red-hover: #c82333;
        --text-light: #e0e0e0;
    }

    .navbar-vertical {
        background: linear-gradient(180deg, var(--sidebar-bg) 0%, #0d0d0d 100%) !important;
        border-right: 2px solid var(--accent-red);
    }

    .navbar-vertical .navbar-brand {
        color: var(--text-light) !important;
        border-bottom: 2px solid var(--accent-red);
        padding-bottom: 1rem;
        margin-bottom: 1rem;
    }

    .navbar-vertical .navbar-brand:hover {
        color: var(--accent-red) !important;
    }

    .navbar-vertical .navbar-brand svg {
        color: var(--accent-red);
    }

    .navbar-vertical .nav-link {
        color: var(--text-light) !important;
        border-radius: 8px;
        margin: 4px 8px;
        transition: all 0.3s ease;
    }

    .navbar-vertical .nav-link:hover {
        background: var(--sidebar-hover) !important;
        border-left: 3px solid var(--accent-red);
        padding-left: 12px;
        transform: translateX(4px);
    }

    .navbar-vertical .nav-link.active {
        background: var(--accent-red) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
    }

    .navbar-vertical .nav-link-icon {
        color: var(--accent-red) !important;
    }

    .navbar-vertical .nav-link:hover .nav-link-icon {
        color: #ffffff !important;
    }

    .navbar-vertical .nav-link.active .nav-link-icon {
        color: #ffffff !important;
    }

    .navbar-toggler {
        border-color: var(--accent-red) !important;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23dc3545' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    }

    .navbar-vertical .dropdown-menu {
        background: var(--sidebar-bg);
        border: 1px solid var(--accent-red);
    }

    .navbar-vertical .dropdown-item {
        color: var(--text-light);
    }

    .navbar-vertical .dropdown-item:hover {
        background: var(--accent-red);
        color: #ffffff;
    }
</style>

<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard') }} " style="text-decoration: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline
                     icon-tabler-device-desktop-code">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12.5 16h-8.5a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v8"/>
                    <path d="M7 20h4"/>
                    <path d="M9 16v4"/>
                    <path d="M20 21l2 -2l-2 -2"/>
                    <path d="M17 17l-2 2l2 2"/>
                </svg>
                it-project
            </a>

            <!-- Dashboard -->
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                       href="{{ route('dashboard') }}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="currentColor"
                           stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round"
                           class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                          <path d="M13.45 11.55l2.05 -2.05"/>
                          <path d="M6.4 20a9 9 0 1 1 11.2 0z"/>
                      </svg>
                    </svg>
                </span>
                        <span class="nav-link-title">
                  Dashboard
                </span>
                    </a>
                </li>

                <!-- Email subscribers -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'back.subscribers' ? 'active' : '' }}"
                       href="{{ route('back.subscribers') }}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6"/>
                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"/>
                    <path d="M3 19l6 -6"/>
                    <path d="M15 13l6 6"/>
                  </svg>
                </span>
                        <span class="nav-link-title">
                  Email subscribers
                </span>
                    </a>
                </li>

                <!-- Logins Users -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'back.users' ? 'active' : '' }}"
                       href="{{ route('back.users') }}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                     <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"/><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                     <path d="M17 10h2a2 2 0 0 1 2 2v1"/><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                     <path d="M3 13v-1a2 2 0 0 1 2 -2h2"/></svg>
                </span>
                        <span class="nav-link-title">
                  Logins Users
                </span>
                    </a>
                </li>

                <!-- Contacts -->
                <li class="nav-item">
                    <a class="nav-link" href="">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/mail-opened -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                       stroke="currentColor"
                       stroke-width="2" stroke-linecap="round"
                       stroke-linejoin="round"
                       class="icon icon-tabler icons-tabler-outline icon-tabler-brand-appgallery">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"/>
                      <path d="M9 8a3 3 0 0 0 6 0"/>
                  </svg>
                </span>
                        <span class="nav-link-title">
                  Contacts
                </span>
                    </a>
                </li>

                <!-- Home Banner -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home_banners.index' ? 'active' : '' }}"
                       href="{{ route('home_banners.index') }}?lang=az">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                       class="icon icon-tabler icons-tabler-outline icon-tabler-home-infinity">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                          d="M19 14v-2h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h2.5"/><path
                          d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.75 1.032"/><path
                          d="M15.536 17.586a2.123 2.123 0 0 0 -2.929 0a1.951 1.951 0 0 0 0 2
                          .828c.809 .781 2.12 .781 2.929 0c.809 -.781 -.805 .778 0 0l1.46 -1.41l1.46 -1.419"/><path
                          d="M15.54 17.582l1.46 1.42l1.46 1.41c.809 .78 -.805 -.779 0 0s2.12
                          .781 2.929 0a1.951 1.951 0 0 0 0 -2.828a2.123 2.123 0 0 0 -2.929 0"/>
                  </svg>
                </span>
                        <span class="nav-link-title">
                  Home Banner
                </span>
                    </a>
                </li>

                {{--                About RH-projects--}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'back.rh' ? 'active' : '' }}"
                       href="{{ route('back.rh') }}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                       class="me-2 icon icon-tabler icons-tabler-outline icon-tabler-brand-revolut">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 10h3v10h-3z"/>
                            <path d="M14.5 4h-9.5v3h9.4a1.5 1.5 0 0 1 0 3h-3.4v4l4 6h4l-5 -7h.5a4.5 4.5 0 1 0 0 -9z"/>
                        </svg>
                </span>
                        <span class="nav-link-title">
                About RH-project
                </span>
                    </a>
                </li>


                <!-- Info -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'back.about' ? 'active' : '' }}"
                       href="{{ route('back.about') }}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                      class="icon icon-tabler icons-tabler-filled icon-tabler-info-circle">
                     <path stroke="none" d="M0 0h24v24H0z"
                           fill="none"/>
                     <path d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72
                     9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.
                     007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.
                     117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z"/>
                 </svg>
                </span>
                        <span class="nav-link-title">
                  About
                </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>


