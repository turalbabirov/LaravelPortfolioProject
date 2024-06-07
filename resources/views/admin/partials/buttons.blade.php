{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== button components start ========== -->
    <section class="button-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Buttons</h2>
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
                                        Buttons
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

            <!-- ========== button-cards-wrapper start ========== -->
            <div class="buttons-cards-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">Square Buttons</h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn square-btn btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn square-btn btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn square-btn btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn square-btn btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn square-btn btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn square-btn btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn square-btn btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn square-btn btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn square-btn btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn square-btn btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Default Buttons
                                <span class="text-sm text-regular">(3px Corner Round)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Rounded Buttons
                                <span class="text-sm text-regular">(Full Rounded)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn rounded-full btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn rounded-full btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn rounded-full btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn rounded-full btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn rounded-full btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn rounded-full btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn rounded-full btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn rounded-full btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn rounded-full btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn rounded-full btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">Square Outline Buttons</h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-outline square-btn btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-outline square-btn btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-outline square-btn btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-outline square-btn btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-outline square-btn btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-outline square-btn btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-outline square-btn btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-outline square-btn btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-outline square-btn btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-outline square-btn btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Default Outline Buttons
                                <span class="text-sm text-regular">(3 Px Round)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-outline btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-outline btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-outline btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-outline btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-outline btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-outline btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-outline btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-outline btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-outline btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-outline btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Default Outline Buttons
                                <span class="text-sm text-regular">(Full Rounded)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-outline rounded-full btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-outline rounded-full btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-outline rounded-full btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-outline rounded-full btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-outline rounded-full btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-outline rounded-full btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-outline rounded-full btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-outline rounded-full btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-outline rounded-full btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-outline rounded-full btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">Square Light Buttons</h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-light square-btn btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-light square-btn btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-light square-btn btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-light square-btn btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-light square-btn btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-light square-btn btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-light square-btn btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-light square-btn btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-light square-btn btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-light square-btn btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Default Light Buttons
                                <span class="text-sm text-regular">(3px Corner Round)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-light btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-light btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-light btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-light btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-light btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-light btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-light btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-light btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-light btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-light btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Rounded Light Buttons
                                <span class="text-sm text-regular">(Full Rounded)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-light rounded-full btn-hover">Primary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-light rounded-full btn-hover">Secondary</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-light rounded-full btn-hover">Success</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-light rounded-full btn-hover">Danger</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-light rounded-full btn-hover">Warning</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-light rounded-full btn-hover">Info</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-light rounded-full btn-hover">Dark</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-light rounded-full btn-hover">Light</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-light rounded-full btn-hover">Active</a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-light rounded-full btn-hover">Deactive</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">Square Buttons With Icon</h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Primary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Secondary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Success
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Danger
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Warning
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Info
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Light
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Deactive
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Default Buttons With Icon
                                <span class="text-sm text-regular">(3px Corner Round)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Primary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Secondary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Success
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Danger
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Warning
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Info
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Light
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Deactive
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Rounded Buttons With Icon
                                <span class="text-sm text-regular">(Full Rounded)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Primary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Secondary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Success
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Danger
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Warning
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Info
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Light
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Deactive
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">Square Light Buttons With Icon</h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Primary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Secondary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Success
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Danger
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Warning
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Info
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Light
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-light square-btn btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Deactive
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Default Light Buttons With Icon
                                <span class="text-sm text-regular">(3px Corner Round)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Primary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Secondary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Success
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Danger
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Warning
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Info
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Light
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-light btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Deactive
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card-style mb-30">
                            <h5 class="text-medium mb-25">
                                Rounded Light Buttons With Icon
                                <span class="text-sm text-regular">(Full Rounded)</span>
                            </h5>
                            <ul class="buttons-group">
                                <li>
                                    <a href="#0" class="main-btn primary-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Primary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn secondary-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Secondary
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn success-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Success
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn danger-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Danger
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn warning-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Warning
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn info-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Info
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn dark-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn light-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Light
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn active-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="main-btn deactive-btn-light rounded-full btn-hover">
                                        <i class="lni lni-heart"></i>
                                        Deactive
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== button-cards-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== button components end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
