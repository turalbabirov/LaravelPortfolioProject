{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== signup-section start ========== -->
    <section class="signin-section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Sign up</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#0">Auth</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Sign up
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <div class="row g-0 auth-row">
                <div class="col-lg-6">
                    <div class="auth-cover-wrapper bg-primary-100">
                        <div class="auth-cover">
                            <div class="title text-center">
                                <h1 class="text-primary mb-10">Get Started</h1>
                                <p class="text-medium">
                                    Start creating the best possible user experience
                                    <br class="d-sm-block" />
                                    for you customers.
                                </p>
                            </div>
                            <div class="cover-image">
                                <img src="{{asset('assets/images/auth/signin-image.svg')}}" alt="" />
                            </div>
                            <div class="shape-image">
                                <img src="{{asset('assets/images/auth/shape.svg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="signup-wrapper">
                        <div class="form-wrapper">
                            <h6 class="mb-15">Sign Up Form</h6>
                            <p class="text-sm mb-25">
                                Start creating the best possible user experience for you
                                customers.
                            </p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Name</label>
                                            <input type="text" placeholder="Name" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Email</label>
                                            <input type="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="form-check checkbox-style mb-30">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox-not-robot" />
                                            <label class="form-check-label" for="checkbox-not-robot">
                                                I'm not robot</label>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                            <button class="main-btn primary-btn btn-hover w-100 text-center">
                                                Sign Up
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                            <div class="singup-option pt-40">
                                <p class="text-sm text-medium text-center text-gray">
                                    Easy Sign Up With
                                </p>
                                <div class="button-group pt-40 pb-40 d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn-outline m-2">
                                        <i class="lni lni-facebook-fill mr-10"></i>
                                        Facebook
                                    </button>
                                    <button class="main-btn danger-btn-outline m-2">
                                        <i class="lni lni-google mr-10"></i>
                                        Google
                                    </button>
                                </div>
                                <p class="text-sm text-medium text-dark text-center">
                                    Already have an account? <a href="signin.html">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- ========== signup-section end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
