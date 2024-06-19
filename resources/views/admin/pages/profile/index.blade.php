{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== section start ========== -->
    <div class="container-fluid mt-5">
        <div class="form-elements-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card-style mb-30">
                        <div class="d-flex justify-content-between mb-50">
                            <div>
                                <h6 class="mt-10">X Name's projects</h6>
                            </div>
                            <div class="d-flex gap-2">
                                <!-- Toggle profile -->
                                <div class="form-check form-switch toggle-switch me-5">
                                    <input class="form-check-input" type="checkbox" id="toggleSwitch2" checked />
                                    <label class="form-check-label" for="toggleSwitch2">Active Xname on front</label>
                                </div>
                                <!-- Bura heqiqi data yollayarsan -->
                                <form action="{{ route('admin.profile.projectcategory.delete', ['id' => 1]) }}">
                                    <button class="btn btn-outline-primary">Edit profile</button>
                                </form>
                                <!-- Bura heqiqi data yollayarsan -->
                                <form action="{{ route('admin.profile.projectcategory.delete', ['id' => 1]) }}">
                                    <button class="btn btn-danger">Delete profile</button>
                                </form>
                            </div>
                        </div>

                        <div class="col">
                            <!-- end card -->
                            <div class="table-wrapper table-responsive">
                                <table class="table striped-table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <h6>Project Name:</h6>
                                        </th>
                                        <th>
                                            <h6>Project Category:</h6>
                                        </th>
                                        <th>
                                            <h6>Project URL:</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="text-sm">#1</h6>
                                        </td>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="https://static.vecteezy.com/system/resources/previews/006/059/989/non_2x/crossed-camera-icon-avoid-taking-photos-image-is-not-available-illustration-free-vector.jpg" alt="" />
                                                </div>
                                                <div class="lead-text">
                                                    <p>Title</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>X category</p>
                                        </td>
                                        <td class="d-flex">
                                            <p>X url</p>
                                        </td>
                                    </tr>
                                    <!-- end table row -->
                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== section end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
