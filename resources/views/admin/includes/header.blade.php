<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none w-auto">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="blur-up lazyloaded d-block d-lg-none"
                        src="images/dashboard/multikart-logo-black.png" alt="">
                </a>
            </div>
        </div>
        <div class="mobile-sidebar w-auto">
            <div class="media-body text-end switch-sm">
                <label class="switch">
                    <a href="javascript:void(0)">
                        <i id="sidebar-toggle" data-feather="align-left"></i>
                    </a>
                </label>
            </div>
        </div>
        <div class="nav-right col">
            <ul class="nav-menus">
                <li>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search..">
                            <span class="d-sm-none mobile-search">
                                <i data-feather="search"></i>
                            </span>
                        </div>
                    </form>
                </li>
                <li>
                    <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                        <i data-feather="maximize-2"></i>
                    </a>
                </li>
                <li class="onhover-dropdown">
                    <a class="txt-dark" href="javascript:void(0)">
                        <h6 class="fw-bold" style="font-size:.9rem;text-transform: uppercase;">{{app()->getLocale()}}</h6>
                    </a>
                    <ul class="language-dropdown onhover-show-div p-20">
                            {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties) --}}
                                <li class="d-block text-center">
                                    {{-- <a class="fw-bold" style="color: #FF4C3B;font-size:1rem" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> --}}
                                        {{-- {{ $properties['native'] }} --}}
                                    </a>
                                </li>
                            {{-- @endforeach --}}
                    </ul>
                </li>
                <li class="onhover-dropdown">
                    <i data-feather="bell"></i>
                    <span class="badge badge-pill badge-primary pull-right notification-badge">3</span>
                    <span class="dot"></span>
                    <ul class="notification-dropdown onhover-show-div p-0">
                        <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0">
                                        <span>
                                            <i class="shopping-color" data-feather="shopping-bag"></i>
                                        </span>Your order ready for Ship..!
                                    </h6>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 txt-success">
                                        <span>
                                            <i class="download-color font-success" data-feather="download"></i>
                                        </span>Download Complete
                                    </h6>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 txt-danger">
                                        <span>
                                            <i class="alert-color font-danger" data-feather="alert-circle"></i>
                                        </span>250 MB trash files
                                    </h6>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                </div>
                            </div>
                        </li>
                        <li class="txt-dark"><a href="javascript:void(0)">All</a> notification</li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="right_side_toggle" data-feather="message-square"></i>
                        <span class="dot"></span>
                    </a>
                </li>
                <li class="onhover-dropdown">
                    <div class="media align-items-center">
                        <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                            src="{{ asset('backend/assets/images/dashboard/user3.jpg') }}" alt="header-user">
                        <div class="dotted-animation">
                            <span class="animate-circle"></span>
                            <span class="main-circle"></span>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                        <li>
                            <a href="javascript:void(0)">
                                <i data-feather="user"></i>Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i data-feather="mail"></i>Inbox
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i data-feather="lock"></i>Lock Screen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i data-feather="settings"></i>Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i>{{ __('main_trans.Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right">
                <i data-feather="more-horizontal"></i>
            </div>
        </div>
    </div>
</div>