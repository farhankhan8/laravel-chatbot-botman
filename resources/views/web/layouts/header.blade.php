@if(session('status'))
    <div class="alert alert-success m-0 contactSuccess text-center"><h5 class="m-0">{{ session('status') }}</h5></div>
@section('page_scripts')
    <script src="{{ mix('assets/js/web/web.js') }}"></script>
@endsection
@endif
{{-- News container starts --}}
@if(!empty($todayNotice))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <h5 class="p-0 m-0 py-1 news">
                    <marquee>{{ $todayNotice->description }}</marquee>
                </h5>
            </div>
        </div>
    </div>
@endif
{{-- News container ends --}}

<div class="container-fluid nav-bg">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand pl-1" href="{{ url('/') }}">
                    <img src="{{ asset('/images/mhn LOGo.png') }}" class="d-inline-block align-top img-fluid logo-size"
                         alt="hms-logo">
                </a>
                <div class="col">
                    <ul class="navbar-nav ml-auto font-weight-bold">
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>Home</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Register</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Cookies Consent</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>About MyHealth</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Strategic Plan</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Our Board</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Press / Media</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Opportunities</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Campaigns</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Partners and Recognition</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>Service</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Sexual Health</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">STIs</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Contraception</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Pregnancy</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Psychosexual</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Contact Tracing</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Help & Advice</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Mock Clinic</a>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>ASK THE EXPERTS</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">F.A.Q</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Health & Wellness</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Growing Up</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Youth-Led Events</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Resources</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Relationships</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Service Request</a>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>EVENTS</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Outreach Health</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">HealthWorkshop</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Hygiene Promotion</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Competitions</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Galleries Videos</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>TRAINING</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Seminars Workshop</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Research Survey</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Skills Progress</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Health Education</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>GET INVOLVED</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Corporate Volunteering</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Work Experience</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Fundraising</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Open Days</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Download Forms</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>DONATE</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Gifts</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Sponsor</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Service Offers</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>SHOP</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Ordering</a>
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Requests</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class=""></i>BOOKINGS</span>
                                <div class="language-contents">
                                <a href="javascript:void(0)" class="language-menu languageSelection"data-prefix-value="">Appointments Sign-In</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item simple-menu">
                            <div class="nav-link language-name">
                                <span><i class="fas fa-cart-plus"></i></span>
                            </div>
                        </li>
                        @auth
                            @role('Admin')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ route('dashboard') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Patient')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('patient/my-cases') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Doctor')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Nurse')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('bed-types') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Receptionist')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('appointments') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Pharmacist')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Accountant')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('accounts') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Case Manager')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Lab Technician')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                        @else
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm"
                                   href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
