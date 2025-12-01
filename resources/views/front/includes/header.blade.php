<style>
        .lang-dropdown {
            position: relative;
            margin-right: 20px;
        }

        .lang-btn {
            background: #000;
            color: #fff;
            border: 2px solid #dc3545;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .lang-btn:hover {
            background: #dc3545;
        }

        .lang-menu {
            position: absolute;
            top: 45px;
            background: #111;
            width: 140px;
            border-radius: 6px;
            display: none;
            padding: 6px 0;
            border: 1px solid #dc3545;
            z-index: 999;
        }

        .lang-item {
            padding: 8px 12px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .lang-item:hover {
            background: #dc3545;
        }
    </style>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
     data-wow-delay="0.1s">
    <a href="{{ route('front.home') }}" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="mb-0 text-primary text-uppercase"><i class="fa-solid fa-computer me-3"></i>it-project</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('front.home') }}" class="nav-item nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}">@lang('messages.home')</a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link {{ request()->routeIs('front.about') ? 'active' : '' }}">@lang('messages.about')</a>
            <a href="{{ route('front.service') }}" class="nav-item nav-link {{ request()->routeIs('front.service') ? 'active' : '' }}">@lang('messages.service')</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('front.pages') ? 'active' : '' }}">@lang('messages.pages')</a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">@lang('messages.pricing plan')</a>
                    <a href="" class="dropdown-item">@lang('messages.our programists')</a>
                    <a href="" class="dropdown-item">@lang('messages.working hours')</a>
                    <a href="" class="dropdown-item">@lang('messages.testimonials')</a>
                </div>
            </div>
            <a href="{{ route('front.contact') }}" class="nav-item nav-link {{ request()->routeIs('front.contact') ? 'active' : '' }}">@lang('messages.contact')</a>
        </div>

        <!-- 🌍 Start Language Dropdown -->
        <div class="lang-dropdown">
            <div class="lang-btn" onclick="toggleLangMenu()">
                <span onchange="changeLang({{ app()->getLocale() }})">
                    @if (app()->getLocale()==='en')

                        <span class="fi fi-gb-eng"></span> EN
                        <div class="lang-menu" id="langMenu">
                        <div class="lang-item" onclick="changeLang('az')">
                            <span class="fi fi-az"></span> AZ
                        </div>
                        <div class="lang-item" onclick="changeLang('ru')">
                            <span class="fi fi-ru"></span> RU
                        </div>
                        @elseif (app()->getLocale()==='az')

                                <span class="fi fi-az"></span> AZ
                                <div class="lang-menu" id="langMenu">
                                <div class="lang-item" onclick="changeLang('en')">
                                    <span class="fi fi-gb-eng"></span> EN
                                </div>
                                <div class="lang-item" onclick="changeLang('ru')">
                                    <span class="fi fi-ru"></span> RU
                                </div>
                                @elseif (app()->getLocale()==='ru')

                                        <span class="fi fi-ru"></span> RU
                                        <div class="lang-menu" id="langMenu">
                                        <div class="lang-item" onclick="changeLang('en')">
                                            <span class="fi fi-gb-eng"></span> EN
                                        </div>
                                        <div class="lang-item" onclick="changeLang('az')">
                                            <span class="fi fi-az"></span> AZ
                                        </div>
                                        @endif
                                    </div>
                            </div>
                    </div>
                </span>
            </div>
        </div>
        <!-- 🌍 End Language Dropdown -->
        <a href="{{ route('register') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">@lang('messages.sign up')<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

<script>
    function toggleLangMenu() {
        document.getElementById("langMenu").style.display =
            document.getElementById("langMenu").style.display === "block"
                ? "none"
                : "block";
    }

    function changeLang(lang) {
        // Burada dil dəyişmə rout-unu yaz
        window.location.href = "/language/" + lang;
    }

    // Click outside close
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".lang-dropdown")) {
            document.getElementById("langMenu").style.display = "none";
        }
    });
</script>



