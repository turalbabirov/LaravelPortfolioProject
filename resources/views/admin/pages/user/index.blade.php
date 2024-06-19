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
                            <h2>Users</h2>
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
                            <a href="{{route('admin.user.create')}}" class="main-btn primary-btn-light square-btn btn-hover mb-10">Add User</a>
{{--                            <p class="text-sm mb-20">--}}
{{--                                For basic styling—light padding and only horizontal--}}
{{--                                dividers—use the class table.--}}
{{--                            </p>--}}
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="lead-name">
                                            <h6>Fullname</h6>
                                        </th>
                                        <th class="lead-email">
                                            <h6>Email</h6>
                                        </th>
                                        <th>
                                            <h6>Operation</h6>
                                        </th>
                                        <th>
                                            <h6>Status</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#{{ $user->id }}</h6>
                                                </td>
                                                <td class="min-width">
                                                    <div class="lead">
                                                        <div class="lead-image">
{{--                                                            {{dd($user->picture)}}--}}
                                                            <img src="{{ $user->picture ? asset('storage/pictures/' . $user->picture) : 'https://static.vecteezy.com/system/resources/previews/006/059/989/non_2x/crossed-camera-icon-avoid-taking-photos-image-is-not-available-illustration-free-vector.jpg' }}" alt="" />
                                                        </div>
                                                        <div class="lead-text">
                                                            <p><a href="#">{{$user->fullname}}</a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="min-width">
                                                    <p>{{$user->email}}</p>
                                                </td>
                                                <td class="min-width">
                                                    <p>
                                                        <form action="{{ route('admin.profile.create', ['id' => $user->id]) }}" method="post" class="d-inline">
                                                            @csrf
                                                            <button class="btn btn-outline-primary me-4">Add Profile</button>
                                                        </form>
                                                        <a href="{{ route('admin.profile.index') }}" class="btn-link link-primary">View Projects</a>
                                                    </p>
                                                </td>
                                                <td class="min-width">
                                                    <span class="status-btn success-btn">Active</span>
                                                </td>
{{--                                                <td>--}}
{{--                                                    <span class="status-btn close-btn">Close</span>--}}
{{--                                                </td>--}}
                                                <td>
                                                    <div class="action">
                                                        <button>
                                                            <a href="{{ route('admin.user.delete', ['id' => $user->id]) }}" class="text-danger">
                                                                <i class="lni lni-trash-can"></i>
                                                            </a>
                                                        </button>
                                                        <button>
                                                            <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="text-primary">
                                                                <i class="lni lni-pencil-alt"></i>
                                                            </a>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
