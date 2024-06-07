{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== alert components start ========== -->
    <section class="alert-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Alerts</h2>
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
                                    <li class="breadcrumb-item">
                                        <a href="#0">UI Components</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Alerts
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

            <!-- ========== alerts-wrapper start ========== -->
            <div class="alerts-wrapper">
                <div class="card-style mb-30">
                    <h5 class="text-medium mb-25">Default Alert</h5>
                    <p class="text-sm mb-30">
                        Alerts are available for any length of text, as well as an
                        optional dismiss button. For proper styling, use one of the four
                        required contextual classes (e.g., .alert-success). For inline
                        dismissal, use the alerts jQuery plugin
                    </p>
                    <div class="alert-list-wrapper">
                        <div class="alert-box primary-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Primary</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#4A6CF7</h4>
                                <p class="text-medium">
                                    Excitement, Energy, Passion, Courage, Attention
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box danger-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Danger</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Excitement, Energy, Passion, Courage, Attention
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box orange-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Orange</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Excitement, Energy, Passion, Courage, Attention
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box warning-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Warning</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Enthusiasm, Opportunity, Spontaneity, Happiness,
                                    Positivity
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box info-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Info</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Growth, Harmony, Kindness, Dependability
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box success-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Success</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Safety, Harmony, Stability, Reliability, Balance
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box secondary-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Secondary</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Safety, Harmony, Stability, Reliability, Balance
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box gray-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Gray</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Safety, Harmony, Stability, Reliability, Balance
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                        <div class="alert-box black-alert pl-100">
                            <div class="left">
                                <h5 class="text-bold">Black</h5>
                            </div>
                            <div class="alert">
                                <h4 class="alert-heading">#D50100</h4>
                                <p class="text-medium">
                                    Safety, Harmony, Stability, Reliability, Balance
                                </p>
                            </div>
                        </div>
                        <!-- end alert-box -->
                    </div>
                </div>
            </div>
            <!-- ========== alerts-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== alert components end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
