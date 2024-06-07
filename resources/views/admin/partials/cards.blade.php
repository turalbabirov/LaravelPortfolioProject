{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== card components start ========== -->
    <section class="card-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Cards</h2>
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
                                        Cards
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

            <!-- ========== cards-styles start ========== -->
            <div class="cards-styles">
                <!-- ========= card-style-1 start ========= -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-1 mb-30">
                            <div class="card-meta">
                                <div class="image">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-1/admin-1.png')}}" alt=""/>
                                </div>
                                <div class="text">
                                    <p class="text-sm text-medium">
                                        Posted by : <a href="#0">Hammad</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-1/card-1.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0"> Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                            </div>
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-1 mb-30">
                            <div class="card-meta">
                                <div class="image">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-1/admin-2.png')}}" alt=""/>
                                </div>
                                <div class="text">
                                    <p class="text-sm text-medium">
                                        Posted by : <a href="#0">Mahmud</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-1/card-2.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0"> Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                            </div>
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-1 mb-30">
                            <div class="card-meta">
                                <div class="image">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-1/admin-3.png')}}" alt=""/>
                                </div>
                                <div class="text">
                                    <p class="text-sm text-medium">
                                        Posted by : <a href="#0">Jamil Kareem</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-1/card-3.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0"> Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                            </div>
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- ========= card-style-1 end ========= -->

                <!-- ========= card-style-2 start ========= -->
                <div class="row">
                    <div class="col-12">
                        <div class="title mt-30 mb-30">
                            <h2>Cards</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-2 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-2/card-1.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-2 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-2/card-2.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-2 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-2/card-3.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- ========= card-style-2 end ========= -->

                <!-- ========= card-style-3 start ========= -->
                <div class="row">
                    <div class="col-12">
                        <div class="title mt-30 mb-30">
                            <h2>Cards</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-3 mb-30">
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante. With supporting text below as a
                                    natural lead-in to additional content. consectetur
                                    adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <a href="#0" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-3 mb-30">
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante. With supporting text below as a
                                    natural lead-in to additional content. consectetur
                                    adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <a href="#0" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-style-3 mb-30">
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante. With supporting text below as a
                                    natural lead-in to additional content. consectetur
                                    adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <a href="#0" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- ========= card-style-3 end ========= -->

                <!-- ========= card-style-4 start ========= -->
                <div class="row">
                    <div class="col-12">
                        <div class="title mt-30 mb-30">
                            <h2>Cards</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card-style-4 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-4/card-1.png')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                                <a href="#0" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card-style-4 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-4/card-2.png')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                                <a href="#0" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card-style-4 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-4/card-3.png')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                                <a href="#0" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- ========= card-style-4 end ========= -->

                <!-- ========= card-style-5 start ========= -->
                <div class="row">
                    <div class="col-12">
                        <div class="title mt-30 mb-30">
                            <h2>Cards</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="card-style-5 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-5/card-1.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                                <a href="#0" class="main-btn primary-btn btn-hover">Read More</a>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="card-style-5 mb-30">
                            <div class="card-image">
                                <a href="#0">
                                    <img src="{{asset('admin_files/assets/images/cards/card-style-5/card-2.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h4><a href="#0">Card Title here </a></h4>
                                <p>
                                    With supporting text below as a natural lead-in to
                                    additional content. consectetur adipiscing elit. Integer
                                    posuere erat a ante.
                                </p>
                                <a href="#0" class="main-btn primary-btn btn-hover">Read More</a>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- ========= card-style-5 end ========= -->
            </div>
            <!-- ========== cards-styles end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== card components end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
