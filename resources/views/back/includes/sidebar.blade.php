@php use Illuminate\Support\Facades\Route; @endphp
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-computer me-3"></i>it-project
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('back.subscribers') }}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/mail-opened -->
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
                <li class="nav-item dropdown">
                    <a class="nav-link d-flex align-items-center" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- SVG icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="me-2 icon icon-tabler icons-tabler-outline icon-tabler-brand-revolut">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 10h3v10h-3z"/>
                            <path d="M14.5 4h-9.5v3h9.4a1.5 1.5 0 0 1 0 3h-3.4v4l4 6h4l-5 -7h.5a4.5 4.5 0 1 0 0 -9z"/>
                        </svg>
                        Statistics
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>


