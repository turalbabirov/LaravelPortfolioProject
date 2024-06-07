{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- typography start -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Typography</h2>
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
                                        Typography
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

            <!-- ========== typography-cards start ========== -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-style mb-30">
                        <h5 class="text-medium mb-10">Heading</h5>
                        <p class="text-sm mb-30">
                            All HTML headings, &lt;h1>&lt;/h1> through &lt;h6>&lt;/h6>,
                            are available.
                        </p>
                        <div class="heading-one mb-30">
                            <h1 class="mb-10">Heading 1- Bold</h1>
                            <p class="text-sm">
                                Font- size 24 line-height 29 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div class="heading-two mb-30">
                            <h2 class="mb-10">Heading 2- Semi-bold</h2>
                            <p class="text-sm">
                                Font- size 24 line-height 29 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div class="heading-three mb-30">
                            <h3 class="mb-10">Heading 3- Medium</h3>
                            <p class="text-sm">
                                Font- size 24 line-height 29 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div class="heading-four mb-30">
                            <h4 class="mb-10">Heading 4- Semi-bold</h4>
                            <p class="text-sm">
                                Font- size 20 line-height 24 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div class="heading-five mb-30">
                            <h5 class="mb-10">Heading 5-Bold</h5>
                            <p class="text-sm">
                                Font- size 16 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div class="heading-six">
                            <h6 class="mb-10">Heading 6- Semi-bold</h6>
                            <p class="text-sm">
                                Font- size 16 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card-style mb-30">
                        <h1 class="mb-30">Title Text</h1>
                        <p>
                            <span class="text-success text-medium"> Paragraph text</span>
                            sit amet, consectetur adipiscing elit. Orci pellentesque amet
                            quam massa in aliquet pulvinar tincidunt. Enim sit elit
                            scelerisque vel aliquam vel quam a tincidunt. Nunc diam at sed
                            fames integer turpis libero. Id nunc quisque sed ut nec
                            phasellus turpis enim elit. Turpis lobortis pellentesque ac
                            massa risus faucibus tempus ut neque. Faucibus orci faucibus
                            malesuada imperdiet vitae.Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Orci pellentesque amet quam massa
                            in aliquet pulvinar tincidunt. Enim sit elit scelerisque vel
                            aliquam vel quam a tincidunt. Nunc diam at sed fames integer
                            turpis libero. Id nunc quisque sed ut nec phasellus turpis
                            enim elit. Turpis lobortis pellentesque ac massa risus
                            faucibus tempus ut neque. Faucibus orci faucibus malesuada
                            imperdiet vitae.
                        </p>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="card-style mb-30">
                        <h5 class="mb-30 text-medium">Content Text</h5>
                        <div class="mb-30">
                            <h5 class="text-medium mb-10">Content 1- Medium</h5>
                            <p class="text-sm">
                                Font- size 16 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div class="mb-30">
                            <h5 class="text-sm text-medium mb-10">Content 1- Medium</h5>
                            <p class="text-sm">
                                Font- size 14 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div>
                            <h5 class="text-sm text-regular mb-10">Content 1- Medium</h5>
                            <p class="text-sm">
                                Font- size 14 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card-style mb-30">
                        <h5 class="mb-30 text-medium">Button Text</h5>
                        <div class="mb-30">
                            <h5 class="text-sm text-medium mb-10">Content 1- Medium</h5>
                            <p class="text-sm">
                                Font- size 14 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                        <div>
                            <h5 class="text-sm text-regular mb-10">Content 1- Medium</h5>
                            <p class="text-sm">
                                Font- size 14 line-height 19 letter-spacing _0.0 px
                            </p>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card-style mb-30">
                        <h5 class="mb-30 text-medium">Text Color</h5>
                        <p class="text-medium text-dark mb-30">
                            This is Dark text You can archive this adding
                            <mark class="text-dark bg-dark-100"> .text-dark </mark> class
                        </p>
                        <p class="text-medium text-gray mb-30">
                            This is Gray text You can archive this adding
                            <mark class="text-gray bg-dark-100"> .text-gray </mark> class
                        </p>
                        <p class="text-medium text-success mb-30">
                            This is Success text You can archive this adding
                            <mark class="text-success bg-success-100">
                                .text-success
                            </mark>
                            class
                        </p>
                        <p class="text-medium text-warning mb-30">
                            This is Warning text You can archive this adding
                            <mark class="text-warning bg-warning-100">
                                .text-warning
                            </mark>
                            class
                        </p>
                        <p class="text-medium text-danger mb-30">
                            This is Danger text You can archive this adding
                            <mark class="text-danger bg-danger-100"> .text-danger </mark>
                            class
                        </p>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- ========== typography-cards end ============ -->
        </div>
        <!-- end container -->
    </section>
    <!-- typography end -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
