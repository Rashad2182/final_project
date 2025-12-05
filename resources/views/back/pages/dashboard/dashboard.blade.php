@extends('back.layouts.admin')

@section('title')
    Dashboard/Home
@endsection

@section('css')

@endsection

@section('content')
    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Home
                  </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                               data-bs-auto-close="outside" role="button" aria-expanded="false">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                      <path d="M12 12l8 -4.5" />
                      <path d="M12 12l0 9" />
                      <path d="M12 12l-8 -4.5" />
                      <path d="M16 5.25l-8 4.5" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Interface
                  </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./alerts.html">
                                            Alerts
                                        </a>
                                        <a class="dropdown-item" href="./accordion.html">
                                            Accordion
                                        </a>
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                                               data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                Authentication
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="./sign-in.html" class="dropdown-item">
                                                    Sign in
                                                </a>
                                                <a href="./sign-in-link.html" class="dropdown-item">
                                                    Sign in link
                                                </a>
                                                <a href="./sign-in-illustration.html" class="dropdown-item">
                                                    Sign in with illustration
                                                </a>
                                                <a href="./sign-in-cover.html" class="dropdown-item">
                                                    Sign in with cover
                                                </a>
                                                <a href="./sign-up.html" class="dropdown-item">
                                                    Sign up
                                                </a>
                                                <a href="./forgot-password.html" class="dropdown-item">
                                                    Forgot password
                                                </a>
                                                <a href="./terms-of-service.html" class="dropdown-item">
                                                    Terms of service
                                                </a>
                                                <a href="./auth-lock.html" class="dropdown-item">
                                                    Lock screen
                                                </a>
                                                <a href="./2-step-verification.html" class="dropdown-item">
                                                    2 step verification
                                                </a>
                                                <a href="./2-step-verification-code.html" class="dropdown-item">
                                                    2 step verification code
                                                </a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="./blank.html">
                                            Blank page
                                        </a>
                                        <a class="dropdown-item" href="./badges.html">
                                            Badges
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./buttons.html">
                                            Buttons
                                        </a>
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown"
                                               data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                Cards
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="./cards.html" class="dropdown-item">
                                                    Sample cards
                                                </a>
                                                <a href="./card-actions.html" class="dropdown-item">
                                                    Card actions
                                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                                </a>
                                                <a href="./cards-masonry.html" class="dropdown-item">
                                                    Cards Masonry
                                                </a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="./carousel.html">
                                            Carousel
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./charts.html">
                                            Charts
                                        </a>
                                        <a class="dropdown-item" href="./colors.html">
                                            Colors
                                        </a>
                                        <a class="dropdown-item" href="./colorpicker.html">
                                            Color picker
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./datagrid.html">
                                            Data grid
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./datatables.html">
                                            Datatables
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./dropdowns.html">
                                            Dropdowns
                                        </a>
                                        <a class="dropdown-item" href="./dropzone.html">
                                            Dropzone
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown"
                                               data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                Error pages
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="./error-404.html" class="dropdown-item">
                                                    404 page
                                                </a>
                                                <a href="./error-500.html" class="dropdown-item">
                                                    500 page
                                                </a>
                                                <a href="./error-maintenance.html" class="dropdown-item">
                                                    Maintenance page
                                                </a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="./flags.html">
                                            Flags
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./inline-player.html">
                                            Inline player
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./lightbox.html">
                                            Lightbox
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./lists.html">
                                            Lists
                                        </a>
                                        <a class="dropdown-item" href="./modals.html">
                                            Modal
                                        </a>
                                        <a class="dropdown-item" href="./maps.html">
                                            Map
                                        </a>
                                        <a class="dropdown-item" href="./map-fullsize.html">
                                            Map fullsize
                                        </a>
                                        <a class="dropdown-item" href="./maps-vector.html">
                                            Map vector
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./markdown.html">
                                            Markdown
                                        </a>
                                        <a class="dropdown-item" href="./navigation.html">
                                            Navigation
                                        </a>
                                        <a class="dropdown-item" href="./offcanvas.html">
                                            Offcanvas
                                        </a>
                                        <a class="dropdown-item" href="./pagination.html">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                            Pagination
                                        </a>
                                        <a class="dropdown-item" href="./placeholder.html">
                                            Placeholder
                                        </a>
                                        <a class="dropdown-item" href="./steps.html">
                                            Steps
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./stars-rating.html">
                                            Stars rating
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./tabs.html">
                                            Tabs
                                        </a>
                                        <a class="dropdown-item" href="./tags.html">
                                            Tags
                                        </a>
                                        <a class="dropdown-item" href="./tables.html">
                                            Tables
                                        </a>
                                        <a class="dropdown-item" href="./typography.html">
                                            Typography
                                        </a>
                                        <a class="dropdown-item" href="./tinymce.html">
                                            TinyMCE
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./form-elements.html">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M9 11l3 3l8 -8" />
                      <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Form elements
                  </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                               data-bs-auto-close="outside" role="button" aria-expanded="false">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path
                          d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Extra
                  </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./empty.html">
                                            Empty page
                                        </a>
                                        <a class="dropdown-item" href="./cookie-banner.html">
                                            Cookie banner
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./chat.html">
                                            Chat
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./activity.html">
                                            Activity
                                        </a>
                                        <a class="dropdown-item" href="./gallery.html">
                                            Gallery
                                        </a>
                                        <a class="dropdown-item" href="./invoice.html">
                                            Invoice
                                        </a>
                                        <a class="dropdown-item" href="./search-results.html">
                                            Search results
                                        </a>
                                        <a class="dropdown-item" href="./pricing.html">
                                            Pricing cards
                                        </a>
                                        <a class="dropdown-item" href="./pricing-table.html">
                                            Pricing table
                                        </a>
                                        <a class="dropdown-item" href="./faq.html">
                                            FAQ
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./users.html">
                                            Users
                                        </a>
                                        <a class="dropdown-item" href="./license.html">
                                            License
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./logs.html">
                                            Logs
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./music.html">
                                            Music
                                        </a>
                                        <a class="dropdown-item" href="./photogrid.html">
                                            Photogrid
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./tasks.html">
                                            Tasks
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./uptime.html">
                                            Uptime monitor
                                        </a>
                                        <a class="dropdown-item" href="./widgets.html">
                                            Widgets
                                        </a>
                                        <a class="dropdown-item" href="./wizard.html">
                                            Wizard
                                        </a>
                                        <a class="dropdown-item" href="./settings.html">
                                            Settings
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./trial-ended.html">
                                            Trial ended
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./job-listing.html">
                                            Job listing
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./page-loader.html">
                                            Page loader
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                               data-bs-auto-close="outside" role="button" aria-expanded="false">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                      <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                      <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                      <path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Layout
                  </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./layout-horizontal.html">
                                            Horizontal
                                        </a>
                                        <a class="dropdown-item" href="./layout-boxed.html">
                                            Boxed
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./layout-vertical.html">
                                            Vertical
                                        </a>
                                        <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                            Vertical transparent
                                        </a>
                                        <a class="dropdown-item" href="./layout-vertical-right.html">
                                            Right vertical
                                        </a>
                                        <a class="dropdown-item" href="./layout-condensed.html">
                                            Condensed
                                        </a>
                                        <a class="dropdown-item" href="./layout-combo.html">
                                            Combined
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./layout-navbar-dark.html">
                                            Navbar dark
                                        </a>
                                        <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                            Navbar sticky
                                        </a>
                                        <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                            Navbar overlap
                                        </a>
                                        <a class="dropdown-item" href="./layout-rtl.html">
                                            RTL mode
                                        </a>
                                        <a class="dropdown-item" href="./layout-fluid.html">
                                            Fluid
                                        </a>
                                        <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                            Fluid vertical
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./icons.html">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path
                          d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                      <path d="M10 10l.01 0" />
                      <path d="M14 10l.01 0" />
                      <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    4637 icons
                  </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./emails.html">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/mail-opened -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                      <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                      <path d="M3 19l6 -6" />
                      <path d="M15 13l6 6" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Email templates
                  </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                               data-bs-auto-close="outside" role="button" aria-expanded="false">
                  <span
                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M15 15l3.35 3.35" />
                      <path d="M9 15l-3.35 3.35" />
                      <path d="M5.65 5.65l3.35 3.35" />
                      <path d="M18.35 5.65l-3.35 3.35" />
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    Help
                  </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                                    Documentation
                                </a>
                                <a class="dropdown-item" href="./changelog.html">
                                    Changelog
                                </a>
                                <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                                    Source code
                                </a>
                                <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank"
                                   rel="noopener">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    Sponsor project!
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                        <form action="./" method="get" autocomplete="off" novalidate>
                            <div class="input-icon">
                  <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                      <path d="M21 21l-6 -6" />
                    </svg>
                  </span>
                                <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Sales</div>
                                    <div class="ms-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h1 mb-3">75%</div>
                                <div class="d-flex mb-2">
                                    <div>Conversion rate</div>
                                    <div class="ms-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M3 17l6 -6l4 4l8 -8" />
                          <path d="M14 7l7 0l0 7" />
                        </svg>
                      </span>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75"
                                         aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Revenue</div>
                                    <div class="ms-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline">
                                    <div class="h1 mb-0 me-2">$4,300</div>
                                    <div class="me-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M3 17l6 -6l4 4l8 -8" />
                          <path d="M14 7l7 0l0 7" />
                        </svg>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-revenue-bg" class="chart-sm"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">New clients</div>
                                    <div class="ms-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline">
                                    <div class="h1 mb-3 me-2">6,782</div>
                                    <div class="me-auto">
                      <span class="text-yellow d-inline-flex align-items-center lh-1">
                        0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l14 0" />
                        </svg>
                      </span>
                                    </div>
                                </div>
                                <div id="chart-new-clients" class="chart-sm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Active users</div>
                                    <div class="ms-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline">
                                    <div class="h1 mb-3 me-2">2,986</div>
                                    <div class="me-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M3 17l6 -6l4 4l8 -8" />
                          <path d="M14 7l7 0l0 7" />
                        </svg>
                      </span>
                                    </div>
                                </div>
                                <div id="chart-active-users" class="chart-sm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row row-cards">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                          <span
                              class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                  d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                              <path d="M12 3v3m0 12v3" />
                            </svg>
                          </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    132 Sales
                                                </div>
                                                <div class="text-secondary">
                                                    12 waiting payments
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                          <span
                              class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                              <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                              <path d="M17 17h-11v-14h-2" />
                              <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                          </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    78 Orders
                                                </div>
                                                <div class="text-secondary">
                                                    32 shipped
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                          <span
                              class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                  d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                            </svg>
                          </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    623 Shares
                                                </div>
                                                <div class="text-secondary">
                                                    16 today
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                          <span
                              class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                          </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    132 Likes
                                                </div>
                                                <div class="text-secondary">
                                                    21 today
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Traffic summary</h3>
                                <div id="chart-mentions" class="chart-lg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Locations</h3>
                                <div class="ratio ratio-21x9">
                                    <div>
                                        <div id="map-world" class="w-100 h-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                                        <div class="progress progress-separated mb-3">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-label="Regular">
                                            </div>
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-label="System">
                                            </div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-label="Shared">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto d-flex align-items-center pe-2">
                                                <span class="legend me-2 bg-primary"></span>
                                                <span>Regular</span>
                                                <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">915MB</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center px-2">
                                                <span class="legend me-2 bg-info"></span>
                                                <span>System</span>
                                                <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">415MB</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center px-2">
                                                <span class="legend me-2 bg-success"></span>
                                                <span>Shared</span>
                                                <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">201MB</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center ps-2">
                                                <span class="legend me-2"></span>
                                                <span>Free</span>
                                                <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">612MB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection


