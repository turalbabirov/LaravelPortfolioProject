{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Icons</h2>
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
                                        Icons
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
            <div class="icons-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card-style">
                            <div class="title d-flex justify-content-between">
                                <div class="left">
                                    <h6 class="text-medium mb-10">Icons Pack</h6>
                                </div>
                            </div>
                            <!-- End Title -->
                            <div class="icons" id="newIcons">
                                <div><i class="mdi mdi-abacus"></i><span>abacus</span></div>
                                <div>
                                    <i class="mdi mdi-alarm-light-off"></i><span>alarm-light-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-alarm-light-off-outline"></i><span>alarm-light-off-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-broadcast"></i><span>broadcast</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-broadcast-off"></i><span>broadcast-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-calendar-clock-outline"></i><span>calendar-clock-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-chat-question"></i><span>chat-question</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-chat-question-outline"></i><span>chat-question-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-check-decagram-outline"></i><span>check-decagram-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-clipboard-clock"></i><span>clipboard-clock</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-clipboard-clock-outline"></i><span>clipboard-clock-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-clock"></i><span>cookie-clock</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-clock-outline"></i><span>cookie-clock-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-edit"></i><span>cookie-edit</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-edit-outline"></i><span>cookie-edit-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-lock"></i><span>cookie-lock</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-lock-outline"></i><span>cookie-lock-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-off"></i><span>cookie-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-off-outline"></i><span>cookie-off-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-refresh"></i><span>cookie-refresh</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-cookie-refresh-outline"></i><span>cookie-refresh-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-dog-side-off"></i><span>dog-side-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-fan-auto"></i><span>fan-auto</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-fire-off"></i><span>fire-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-firework-off"></i><span>firework-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-food-turkey"></i><span>food-turkey</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-gift-off"></i><span>gift-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-gift-off-outline"></i><span>gift-off-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-gift-open"></i><span>gift-open</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-gift-open-outline"></i><span>gift-open-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-kettle-pour-over"></i><span>kettle-pour-over</span>
                                </div>
                                <div><i class="mdi mdi-koala"></i><span>koala</span></div>
                                <div>
                                    <i class="mdi mdi-message-question"></i><span>message-question</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-message-question-outline"></i><span>message-question-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-message-reply-outline"></i><span>message-reply-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-message-reply-text-outline"></i><span>message-reply-text-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-check"></i><span>movie-check</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-check-outline"></i><span>movie-check-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-cog"></i><span>movie-cog</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-cog-outline"></i><span>movie-cog-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-minus"></i><span>movie-minus</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-minus-outline"></i><span>movie-minus-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-off"></i><span>movie-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-off-outline"></i><span>movie-off-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-check"></i><span>movie-open-check</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-check-outline"></i><span>movie-open-check-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-cog"></i><span>movie-open-cog</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-cog-outline"></i><span>movie-open-cog-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-edit"></i><span>movie-open-edit</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-edit-outline"></i><span>movie-open-edit-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-minus"></i><span>movie-open-minus</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-minus-outline"></i><span>movie-open-minus-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-off"></i><span>movie-open-off</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-off-outline"></i><span>movie-open-off-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-play"></i><span>movie-open-play</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-play-outline"></i><span>movie-open-play-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-plus"></i><span>movie-open-plus</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-plus-outline"></i><span>movie-open-plus-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-remove"></i><span>movie-open-remove</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-remove-outline"></i><span>movie-open-remove-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-settings"></i><span>movie-open-settings</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-settings-outline"></i><span>movie-open-settings-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-star"></i><span>movie-open-star</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-open-star-outline"></i><span>movie-open-star-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-play"></i><span>movie-play</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-play-outline"></i><span>movie-play-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-plus"></i><span>movie-plus</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-plus-outline"></i><span>movie-plus-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-remove"></i><span>movie-remove</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-remove-outline"></i><span>movie-remove-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-settings"></i><span>movie-settings</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-settings-outline"></i><span>movie-settings-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-star"></i><span>movie-star</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-movie-star-outline"></i><span>movie-star-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-projector-screen-outline"></i><span>projector-screen-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-robot-happy"></i><span>robot-happy</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-robot-happy-outline"></i><span>robot-happy-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-script-text-key"></i><span>script-text-key</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-script-text-key-outline"></i><span>script-text-key-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-script-text-play"></i><span>script-text-play</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-script-text-play-outline"></i><span>script-text-play-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-star-shooting"></i><span>star-shooting</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-star-shooting-outline"></i><span>star-shooting-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-surround-sound-2-1"></i><span>surround-sound-2-1</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-surround-sound-5-1-2"></i><span>surround-sound-5-1-2</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-table-picnic"></i><span>table-picnic</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-down"></i><span>tag-arrow-down</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-down-outline"></i><span>tag-arrow-down-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-left"></i><span>tag-arrow-left</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-left-outline"></i><span>tag-arrow-left-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-right"></i><span>tag-arrow-right</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-right-outline"></i><span>tag-arrow-right-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-up"></i><span>tag-arrow-up</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-tag-arrow-up-outline"></i><span>tag-arrow-up-outline</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-train-car-passenger"></i><span>train-car-passenger</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-train-car-passenger-door"></i><span>train-car-passenger-door</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-train-car-passenger-door-open"></i><span>train-car-passenger-door-open</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-train-car-passenger-variant"></i><span>train-car-passenger-variant</span>
                                </div>
                                <div><i class="mdi mdi-turkey"></i><span>turkey</span></div>
                                <div>
                                    <i class="mdi mdi-webcam-off"></i><span>webcam-off</span>
                                </div>
                            </div>

                            <a href="https://materialdesignicons.com/" class="text-primary">and 5000+ icons.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
