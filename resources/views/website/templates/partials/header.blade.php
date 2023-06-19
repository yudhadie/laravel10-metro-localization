<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center flex-equal">
                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                    <span class="svg-icon svg-icon-2hx">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                        </svg>
                    </span>
                </button>
                <a href="{{route('home')}}">
                    <img alt="Logo" src="{{asset('assets/media/logos/default-dark.svg')}}" class="logo-default h-25px h-lg-30px" />
                    <img alt="Logo" src="{{asset('assets/media/logos/default.svg')}}" class="logo-sticky h-20px h-lg-25px" />
                </a>
            </div>
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                        <div class="menu-item">
                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ __('menu.home') }}</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#content" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ __('menu.content') }}</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ __('menu.team') }}</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#footer" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ __('menu.contact') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="flex-equal text-end ms-1">
                <p>{{strtoupper(Lang::locale())}}</p>
            </div> --}}
            <div class="flex-equal text-end ms-1">
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-success">Dashboard</a>
                @auth
                <a href="{{ route('logout') }}"
                    class="btn btn-sm btn-danger"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endauth
            </div>
        </div>
    </div>
</div>
