{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== Profile Show components start ========== -->
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Profiles</h2>
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
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tables
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

            <!-- ========== tables-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <a href="{{route('admin.profile.create')}}" class="main-btn primary-btn-light square-btn btn-hover mb-10">Add Profile</a>
{{--                            <p class="text-sm mb-20">--}}
{{--                                For basic styling—light padding and only horizontal--}}
{{--                                dividers—use the class table.--}}
{{--                            </p>--}}
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>

                                        <th class="lead-name">
                                            <h6>Name</h6>
                                        </th>
                                        <th class="lead-surname">
                                            <h6>Surname</h6>
                                        </th>
                                        <th class="lead-email">
                                            <h6>Email</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="{{asset('admin_files/assets/images/lead/lead-1.png')}}" alt="" />
                                                </div>
                                                <div class="lead-text">
                                                    <p>Courtney Henry</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p><a href="#0">yourmail@gmail.com</a></p>
                                        </td>
                                        <td class="min-width">
                                            <p>(303)555 3343523</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <button class="text-danger">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                                <button class="text-primary">
                                                    <i class="lni lni-pencil-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end table row -->
                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== Profile Show components end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
