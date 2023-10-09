@include('auth.auth_layout')
    <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center login_main">
        @include('layouts.window-config')
        <div class="d-flex flex-column flex-root h-100" id="kt_app_root">
            <div class="container h-100">
                <div class="row m-0 h-100 position-relative zindex-1 login_row">
                    <div class="col-sm-12 col-md-12 col-lg-6  d-flex flex-lg-row-fluid login_left">
                        <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                            <h1 class="fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
                            <div class="login_inner fs-base text-center fw-semibold">In this kind of post,
                            <a href="javascript:void(0);" class="opacity-75-hover me-1">the blogger</a>introduces a person they’ve interviewed
                            <br />and provides some background information about
                            <a href="javascript:void(0);" class="opacity-75-hover me-1">the interviewee</a>and their
                            <br />work following this is a transcript of the interview.</div>
                            <img class="theme-light-show mx-auto mw-100 w-150px w-lg-600px mb-10 mb-lg-20 d-none d-xl-inline-block" src="https://themesdesign.in/tydek/layouts/images/home-7.png" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-center p-12 login_right">
                        <div class="d-flex flex-column flex-center w-md-500px">
                            <div class="bg-body rounded-4  d-flex flex-center flex-column align-items-stretch  w-md-400px p-10 rounded-4 login_right_inner">
                                <div class="d-flex flex-center flex-column-fluid flex-column">    
                                    <form method="POST" class="mb-0" action="{{ route('verification.send') }}">
                                    @csrf
                                    @method('POST')
                                        <div class="text-center mb-11">
                                            <h1 class="text-dark fw-bolder mb-3" style="font-size: 12px;">         {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</h1>
                                        </div>
                                        <div class="d-grid mb-6">
                                            <button type="submit" id="" class="btn btn-primary email-password">
                                                <span class="indicator-label"> {{ __('Resend Verification Email') }}</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        @if (session('status') == 'verification-link-sent')
                                            <div class="text-red fw-bolder mb-3" style="font-size: 12px; color:green;">
                                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                            </div>
                                        @endif
                                    </form>
                                    <form method="POST" class="mb-3" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="custom-logout-btn">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </div>
                                <div class="d-flex flex-stack justify-content-center">
                                        <button class="btn btn-flex btn-link btn-color-white-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                                            <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="{{asset('assets/media/flags/united-states.svg')}}" alt="" />
                                            <span data-kt-element="current-lang-name" class="me-1 text-dark">English</span>
                                            <span class="text-dark svg-icon svg-icon-5 svg-icon-muted rotate-180 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0);" class="menu-link d-flex px-5" data-kt-lang="English">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{asset('assets/media/flags/united-states.svg')}}" alt="" />
                                                    </span>
                                                    <span data-kt-element="lang-name">English</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0);" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{asset('assets/media/flags/spain.svg')}}" alt="" />
                                                    </span>
                                                    <span data-kt-element="lang-name">Spanish</span>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>var hostUrl = "assets/";</script>
        <script src="{!! asset('assets/plugins/global/plugins.bundle.js') !!}"></script>
        <script src="{!! asset('assets/js/scripts.bundle.js') !!}"></script>
    </body>
@include('auth.auth_footer')