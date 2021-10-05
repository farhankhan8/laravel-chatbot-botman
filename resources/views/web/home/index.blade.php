@extends('web.layouts.front')
@section('title')
    {{ __('web.home') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lightgallery/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lightgallery/dist/css/lg-transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"/>
@endsection
@section('content')
    {{-- header container starts --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="landing-header">
                    <div class="row">
                        <div class="col-lg-6 order-lg-2 col-12">
                            <div class="header_image">
                                <img src="{{ asset('web/img/header-img.jpg') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 header-text order-lg-1 col-12">
                            <p class="welcome-text mb-5 wow fadeInUp"
                               data-wow-duration="0.4s">Welcome to<br> <span
                                        class="heading-name">MyHealthnet</span> <span
                                        class="heading-text">Promoting and Enhancing Community Health</span>
                            </p>
                            <a href="https://codecanyon.net/item/infyhms-smart-hospital-management-system/26344507"
                               class="header-contact-button wow bounceIn" data-wow-delay="0.4s"
                               target="_blank">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header container ends --}}

    <div class="container features">
        <h4 class="m-0 p-0 text-center section-heading">MyHealthNet Features</h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 my-5 custom-my-4 text-center features-block wow fadeInUp" data-wow-delay=".2s">
                <i class="fas fa-ambulance d-flex justify-content-center mx-auto hover-transitions ambulance"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">Emergency</h5>
                <p class="text-muted">Patient Tranfer from one hospital to other hospital</p>
            </div>
            <div class="col-lg-3 col-md-6 my-5 custom-my-4 text-center features-block wow fadeInUp" data-wow-delay=".3s">
                <i class="fas fa-user-md d-flex justify-content-center mx-auto hover-transitions qualified-doctor"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">Qualified doctors</h5>
                <p class="text-muted">We have 24/7 Doctor available to served you</p>
            </div>
            <div class="col-lg-3 col-md-6 my-5 custom-my-4 text-center features-block wow fadeInUp" data-wow-delay=".4s">
                <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions  outdoor-checkup"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">Outdoors checkup</h5>
                <p class="text-muted">We provide our services to you home if patient is in serious condition</p>
            </div>
            <div class="col-lg-3 col-md-6  my-5 custom-my-4 text-center features-block wow fadeInUp" data-wow-delay=".5s">
                <i class="fas fa-history d-flex justify-content-center mx-auto hover-transitions service-clock"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">24/7</h5>
                <p class="text-muted">We served you 24/7 in a week & 365 Days in Year</p>
            </div>
        </div>
    </div>

    {{-- Departments container starts --}}
    <div class="container pt-5" id="departments">
        <h4 class="m-0 p-0 text-center section-heading">MyHealthNet departments</h4>
        <div class="row mt-3 content-icons">
            <div class="col-12">
                <div class="row">
                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                            <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                            <h5 class="pt-3 text-muted">Doctor Departments Title</h5>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="hmsFeatures">
        <div class="container mt-5">
            <h4 class="m-0 p-0 text-center section-heading">MyHealthNet Backend Features</h4>
            <div class="row">
                <div class="col-12 mt-3 hms__features">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/administrative-feature.png') }}">
                                    <img src="{{ asset('web/img/administrative-feature.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Dashbord</h4>
                                {{--                                <p class="hms__feature-text text-muted"></p>--}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/02. Change Password.png') }}">
                                    <img src="{{ asset('web/img/02. Change Password.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Password Change</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/change_language.jpg') }}">
                                    <img src="{{ asset('web/img/change_language.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Language Change</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/invoice_listing.jpg') }}">
                                    <img src="{{ asset('web/img/invoice_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Ivoice Generating</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_invoice.jpg') }}">
                                    <img src="{{ asset('web/img/create_invoice.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create PDF invoice</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/13. New BIll.png') }}">
                                    <img src="{{ asset('web/img/13. New BIll.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create Bill</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/appointments_calander_view.jpg') }}">
                                    <img src="{{ asset('web/img/appointments_calander_view.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Appointment</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06. Beds List.png') }}">
                                    <img src="{{ asset('web/img/06. Beds List.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Bed list</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06.1. Bed Details.png') }}">
                                    <img src="{{ asset('web/img/06.1. Bed Details.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Bed Details</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06.2. Bed Assign.png') }}">
                                    <img src="{{ asset('web/img/06.2. Bed Assign.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Allocated Beds</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/document_listing.jpg') }}">
                                    <img src="{{ asset('web/img/document_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Documents</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/14. New Ambulance.png') }}">
                                    <img src="{{ asset('web/img/14. New Ambulance.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Ambulance</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_insurance.jpg') }}">
                                    <img src="{{ asset('web/img/create_insurance.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Insurances</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_doctor.jpg') }}">
                                    <img src="{{ asset('web/img/create_doctor.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Doctor</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/15. Add Medicine.png') }}">
                                    <img src="{{ asset('web/img/15. Add Medicine.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Medicine</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/16. Employee Payroll Details.png') }}">
                                    <img src="{{ asset('web/img/16. Employee Payroll Details.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Pay Roll Details</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/employee-payroll.jpg') }}">
                                    <img src="{{ asset('web/img/employee-payroll.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Employee</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/payment-reports.jpg') }}">
                                    <img src="{{ asset('web/img/payment-reports.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Payment Report</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/enquiries.jpg') }}">
                                    <img src="{{ asset('web/img/enquiries.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Enquiries</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/17. Pateint Admission.png') }}">
                                    <img src="{{ asset('web/img/17. Pateint Admission.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Patient Addmission</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/04. Doctors Schedule.png') }}">
                                    <img src="{{ asset('web/img/04. Doctors Schedule.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Doctors Schedule</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/birth_report_listing.jpg') }}">
                                    <img src="{{ asset('web/img/birth_report_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Birth Report</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/18. Email Service.png') }}">
                                    <img src="{{ asset('web/img/18. Email Service.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Email</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/11. Settings.png') }}">
                                    <img src="{{ asset('web/img/11. Settings.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Settings</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 custom-mt-4" id="hmsFacilities">
        <h4 class="m-0 p-0 text-center section-heading">{{ __('web.miscellaneous_facilities.miscellaneous_facilities_of_infyhms') }}</h4>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="facility-block-one">
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.host_in_your_Own_secure_server') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.no_monthly_or_yearly_fees') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.customer_support') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.multi_language_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.admin_and_customer_has_separate_ui_and_login') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.email_and_sms_gateway_adding_for_marketing') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.complete_hospital_management_solution') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.prescription_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.doctor_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.insurance_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.billing_management_system') }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="facility-block-two">
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.role_based_permission_setup_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.multiple_email_and_sms_gateway_added') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.human_resource_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.complete_Bed_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.medication_and_visits_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.case_manager_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.patient_separate_login_and_appointment_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.hospital_enquiry_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.parmacy_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.appointment_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.investigation_reports') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- start using hms block --}}

    <div class="container-fluid start-using-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 justify-content-center d-flex flex-column start-using-content">
                    <p class="start-using-heading wow fadeInUp"
                       data-wow-delay=".2s">{{ __('web.start_using_InfyHMS_now') }}
                    </p>
                    <a class="get-started-btn wow bounceInUp" data-wow-delay=".3s"
                       href="{{url('login')}}">{{ __('web.get_started') }}</a>
                </div>
                <div class="col-lg-7 start-using-image">
                    <img src="{{ asset('web/img/dashboard.png') }}" class="w-100 wow fadeInUp" data-wow-delay=".4s">
                </div>
            </div>
        </div>
    </div>
    {{-- end start using hms block --}}

        <div class="container testimonials" id="testimonials">
            <h4 class="text-center section-heading">Testimonial</h4>
            <div class="testimonial-wrapper mt-3">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-item d-flex align-items-center flex-column">
                                    <img src="" class="testimonial-image"
                                         alt="Testimonial Image">
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-name">Testimonial Name</h3>
                                            <span>Testimonial Description</span>
                                            <span data-toggle="tooltip" data-placement="bottom"
                                                  title=""
                                                  data-delay="{'show':500,'hide':100}">
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- end testimonial block --}}
@endsection
@section('page_scripts')
    <script>
        $(window).on('load', function () {
            $('.owl-carousel').owlCarousel({
                margin: 10,
                autoplay: true,
                loop: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 1,
                        margin: 20,
                    },
                    540: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    },
                    1024: {
                        items: 3,
                    },
                    2256: {
                        items: 3,
                    },
                },
            });
        });
    </script>
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lightgallery/dist/js/lightgallery.js') }}"></script>
    <script src="{{ mix('assets/js/web/plugin.js') }}"></script>
@endsection
