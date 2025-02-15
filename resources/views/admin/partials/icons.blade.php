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
                            <ul class="icons">
                                <li class="trigger Free">
                                    <i class="lni lni-500px"></i><span>500px</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-add-files"></i><span>add-files</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-adobe"></i><span>adobe</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-agenda"></i><span>agenda</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-airbnb"></i><span>airbnb</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-alarm"></i><span>alarm</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-alarm-clock"></i><span>alarm-clock</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-amazon"></i><span>amazon</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-amazon-original"></i><span>amazon-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-amazon-pay"></i><span>amazon-pay</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ambulance"></i><span>ambulance</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-amex"></i><span>amex</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-anchor"></i><span>anchor</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-android"></i><span>android</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-android-original"></i><span>android-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-angellist"></i><span>angellist</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-angle-double-down"></i><span>angle-double-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-angle-double-left"></i><span>angle-double-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-angle-double-right"></i><span>angle-double-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-angle-double-up"></i><span>angle-double-up</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-angular"></i><span>angular</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-apartment"></i><span>apartment</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-app-store"></i><span>app-store</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-apple-brand"></i><span>apple-brand</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-apple-pay"></i><span>apple-pay</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-archive"></i><span>archive</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-down"></i><span>arrow-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-down-circle"></i><span>arrow-down-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-left"></i><span>arrow-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-left-circle"></i><span>arrow-left-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-right"></i><span>arrow-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-right-circle"></i><span>arrow-right-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-top-left"></i><span>arrow-top-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-top-right"></i><span>arrow-top-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-up"></i><span>arrow-up</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrow-up-circle"></i><span>arrow-up-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrows-horizontal"></i><span>arrows-horizontal</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-arrows-vertical"></i><span>arrows-vertical</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-atlassian"></i><span>atlassian</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-aws"></i><span>aws</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-backward"></i><span>backward</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-baloon"></i><span>baloon</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ban"></i><span>ban</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bar-chart"></i><span>bar-chart</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-basketball"></i><span>basketball</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-behance"></i><span>behance</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-behance-original"></i><span>behance-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bi-cycle"></i><span>bi-cycle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bitbucket"></i><span>bitbucket</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bitcoin"></i><span>bitcoin</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-blackboard"></i><span>blackboard</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-blogger"></i><span>blogger</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bluetooth"></i><span>bluetooth</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bold"></i><span>bold</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bolt"></i><span>bolt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bolt-alt"></i><span>bolt-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-book"></i><span>book</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bookmark"></i><span>bookmark</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bookmark-alt"></i><span>bookmark-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bootstrap"></i><span>bootstrap</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bricks"></i><span>bricks</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bridge"></i><span>bridge</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-briefcase"></i><span>briefcase</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-brush"></i><span>brush</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-brush-alt"></i><span>brush-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bubble"></i><span>bubble</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bug"></i><span>bug</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bulb"></i><span>bulb</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bullhorn"></i><span>bullhorn</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-burger"></i><span>burger</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-bus"></i><span>bus</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cake"></i><span>cake</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-calculator"></i><span>calculator</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-calendar"></i><span>calendar</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-camera"></i><span>camera</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-candy"></i><span>candy</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-candy-cane"></i><span>candy-cane</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-capsule"></i><span>capsule</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-car"></i><span>car</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-car-alt"></i><span>car-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-caravan"></i><span>caravan</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cart"></i><span>cart</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cart-full"></i><span>cart-full</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-certificate"></i><span>certificate</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-check-box"></i><span>check-box</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-checkmark"></i><span>checkmark</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-checkmark-circle"></i><span>checkmark-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chef-hat"></i><span>chef-hat</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-down"></i><span>chevron-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-down-circle"></i><span>chevron-down-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-left"></i><span>chevron-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-left-circle"></i><span>chevron-left-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-right"></i><span>chevron-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-right-circle"></i><span>chevron-right-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-up"></i><span>chevron-up</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chevron-up-circle"></i><span>chevron-up-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-chrome"></i><span>chrome</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-circle-minus"></i><span>circle-minus</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-circle-plus"></i><span>circle-plus</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-clipboard"></i><span>clipboard</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-close"></i><span>close</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloud"></i><span>cloud</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloud-check"></i><span>cloud-check</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloud-download"></i><span>cloud-download</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloud-network"></i><span>cloud-network</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloud-sync"></i><span>cloud-sync</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloud-upload"></i><span>cloud-upload</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cloudy-sun"></i><span>cloudy-sun</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-code"></i><span>code</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-code-alt"></i><span>code-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-codepen"></i><span>codepen</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-coffee-cup"></i><span>coffee-cup</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cog"></i><span>cog</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cogs"></i><span>cogs</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-coin"></i><span>coin</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-comments"></i><span>comments</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-comments-alt-2"></i><span>comments-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-comments-reply"></i><span>comments-reply</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-compass"></i><span>compass</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-construction"></i><span>construction</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-construction-hammer"></i><span>construction-hammer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-consulting"></i><span>consulting</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-control-panel"></i><span>control-panel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cpanel"></i><span>cpanel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-creative-commons"></i><span>creative-commons</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-credit-cards"></i><span>credit-cards</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-crop"></i><span>crop</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cross-circle"></i><span>cross-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-crown"></i><span>crown</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-css3"></i><span>css3</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cup"></i><span>cup</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-customer"></i><span>customer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cut"></i><span>cut</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dashboard"></i><span>dashboard</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-database"></i><span>database</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-delivery"></i><span>delivery</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dev"></i><span>dev</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-diamond"></i><span>diamond</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-diamond-alt"></i><span>diamond-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-diners-club"></i><span>diners-club</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dinner"></i><span>dinner</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-direction"></i><span>direction</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-direction-alt"></i><span>direction-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-direction-ltr"></i><span>direction-ltr</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-direction-rtl"></i><span>direction-rtl</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-discord"></i><span>discord</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-discover"></i><span>discover</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-display"></i><span>display</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-display-alt"></i><span>display-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-docker"></i><span>docker</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dollar"></i><span>dollar</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-domain"></i><span>domain</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-download"></i><span>download</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dribbble"></i><span>dribbble</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-drop"></i><span>drop</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dropbox"></i><span>dropbox</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dropbox-original"></i><span>dropbox-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-drupal"></i><span>drupal</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-drupal-original"></i><span>drupal-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-dumbbell"></i><span>dumbbell</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-edge"></i><span>edge</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-cool"></i><span>cool</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-friendly"></i><span>friendly</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-happy"></i><span>happy</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sad"></i><span>sad</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-smile"></i><span>smile</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-speechless"></i><span>speechless</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-suspect"></i><span>suspect</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-tounge"></i><span>tounge</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-empty-file"></i><span>empty-file</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-enter"></i><span>enter</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-envato"></i><span>envato</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-envelope"></i><span>envelope</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-eraser"></i><span>eraser</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-euro"></i><span>euro</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-exit"></i><span>exit</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-exit-down"></i><span>exit-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-exit-up"></i><span>exit-up</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-eye"></i><span>eye</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-facebook"></i><span>facebook</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-facebook-fill"></i><span>facebook-fill</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-facebook-messenger"></i><span>facebook-messenger</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-facebook-original"></i><span>facebook-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-facebook-oval"></i><span>facebook-oval</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-figma"></i><span>figma</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-files"></i><span>files</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-firefox"></i><span>firefox</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-firefox-original"></i><span>firefox-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-fireworks"></i><span>fireworks</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-first-aid"></i><span>first-aid</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-flag"></i><span>flag</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-flag-alt"></i><span>flag-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-flags-alt-1"></i></i><span>flags</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-flickr"></i><span>flickr</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-flower"></i><span>flower</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-folder"></i><span>folder</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-forward"></i><span>forward</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-frame-expand"></i><span>frame-expand</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-fresh-juice"></i><span>fresh-juice</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-full-screen"></i><span>full-screen</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-funnel"></i><span>funnel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-gallery"></i><span>gallery</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-game"></i><span>game</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-gift"></i><span>gift</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-git"></i><span>git</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-github"></i><span>github</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-github-original"></i><span>github-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-goodreads"></i><span>goodreads</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-google"></i><span>google</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-google-drive"></i><span>google-drive</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-google-pay"></i><span>google-pay</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-google-wallet"></i><span>google-wallet</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-graduation"></i><span>graduation</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-graph"></i><span>graph</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-grid"></i><span>grid</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-grid-alt"></i><span>grid-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-grow"></i><span>grow</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-hacker-news"></i><span>hacker-news</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-hammer"></i><span>hammer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-hand"></i><span>hand</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-handshake"></i><span>handshake</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-harddrive"></i><span>harddrive</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-headphone"></i><span>headphone</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-headphone"></i><span>headphone</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-heart"></i><span>heart</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-heart-fill"></i><span>heart-fill</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-heart-monitor"></i><span>heart-monitor</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-helicopter"></i><span>helicopter</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-helmet"></i><span>helmet</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-help"></i><span>help</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-highlight"></i><span>highlight</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-highlight-alt"></i><span>highlight-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-home"></i><span>home</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-hospital"></i><span>hospital</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-hourglass"></i><span>hourglass</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-html5"></i><span>html5</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-image"></i><span>image</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-inbox"></i><span>inbox</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-indent-decrease"></i><span>indent-decrease</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-indent-increase"></i><span>indent-increase</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-infinite"></i><span>infinite</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-information"></i><span>information</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-instagram"></i><span>instagram</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-instagram-fill"></i><span>instagram-fill</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-instagram-original"></i><span>instagram-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-invention"></i><span>invention</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-invest-monitor"></i><span>invest-monitor</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-investment"></i><span>investment</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-island"></i><span>island</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-italic"></i><span>italic</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-java"></i><span>java</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-javascript"></i><span>javascript</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-jcb"></i><span>jcb</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-joomla"></i><span>joomla</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-joomla-original"></i><span>joomla-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-jsfiddle"></i><span>jsfiddle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-juice"></i><span>juice</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-key"></i><span>key</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-keyboard"></i><span>keyboard</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-keyword-research"></i><span>keyword-research</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-laptop"></i><span>laptop</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-laptop-phone"></i><span>laptop-phone</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-laravel"></i><span>laravel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-layers"></i><span>layers</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-layout"></i><span>layout</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-leaf"></i><span>leaf</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-library"></i><span>library</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-lifering"></i><span>lifering</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-line"></i><span>line</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-line-dashed"></i><span>line-dashed</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-line-dotted"></i><span>line-dotted</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-line-double"></i><span>line-double</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-line-spacing"></i><span>line-spacing</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-lineicons"></i><span>lineicons</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-lineicons-alt"></i><span>lineicons-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-link"></i><span>link</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-linkedin"></i><span>linkedin</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-linkedin-original"></i><span>linkedin-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-list"></i><span>list</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-lock"></i><span>lock</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-lock-alt"></i><span>lock-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-magnet"></i><span>magnet</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-magnifier"></i><span>magnifier</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-mailchimp"></i><span>mailchimp</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-map"></i><span>map</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-map-marker"></i><span>map-marker</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-mashroom"></i><span>mashroom</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-mastercard"></i><span>mastercard</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-medium"></i><span>medium</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-magento"></i><span>magento</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-menu"></i><span>menu</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-mic"></i><span>mic</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-microphone"></i><span>microphone</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-microscope"></i><span>microscope</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-microsoft"></i><span>microsoft</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-minus"></i><span>minus</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-mobile"></i><span>mobile</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-money-location"></i><span>money-location</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-money-protection"></i><span>money-protection</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-more"></i><span>more</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-more-alt"></i><span>more-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-mouse"></i><span>mouse</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-move"></i><span>move</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-music"></i><span>music</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-network"></i><span>network</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-night"></i><span>night</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-nodejs"></i><span>nodejs</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-nodejs-alt"></i><span>nodejs-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-notepad"></i><span>notepad</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-npm"></i><span>npm</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-offer"></i><span>offer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-opera"></i><span>opera</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-package"></i><span>package</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-page-break"></i><span>page-break</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pagination"></i><span>pagination</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-paint-bucket-alt"></i>
                                    <span>paint-bucket-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-paint-roller"></i><span>paint-roller</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pallet"></i><span>pallet</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-paperclip"></i><span>paperclip</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-patreon"></i><span>patreon</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pause"></i><span>pause</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-paypal"></i><span>paypal</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-paypal-original"></i><span>paypal-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pencil"></i><span>pencil</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pencil-alt"></i><span>pencil-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-phone"></i><span>phone</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-phone-set"></i><span>phone-set</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-php"></i><span>php</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pie-chart"></i><span>pie-chart</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pilcrow"></i><span>pilcrow</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pin"></i><span>pin</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pinterest"></i><span>pinterest</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pizza"></i><span>pizza</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-plane"></i><span>plane</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-play"></i><span>play</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-play-store"></i><span>play-store</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-plug"></i><span>plug</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-plus"></i><span>plus</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pointer"></i><span>pointer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pointer-down"></i><span>pointer-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pointer-left"></i><span>pointer-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pointer-right"></i><span>pointer-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pointer-top"></i><span>pointer-top</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-popup"></i><span>popup</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-postcard"></i><span>postcard</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pound"></i><span>pound</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-power-switch"></i><span>power-switch</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-printer"></i><span>printer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-producthunt"></i><span>producthunt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-protection"></i><span>protection</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pulse"></i><span>pulse</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-pyramids"></i><span>pyramids</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-python"></i><span>python</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-question-circle"></i><span>question-circle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-quora"></i><span>quora</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-quotation"></i><span>quotation</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-radio-button"></i><span>radio-button</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-rain"></i><span>rain</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-react"></i><span>react</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-reddit"></i><span>reddit</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-reload"></i><span>reload</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-remove-file"></i><span>remove-file</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-reply"></i><span>reply</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-restaurant"></i><span>restaurant</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-revenue"></i><span>revenue</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-road"></i><span>road</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-rocket"></i><span>rocket</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-rss-feed"></i><span>rss-feed</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ruler"></i><span>ruler</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ruler-alt"></i><span>ruler-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ruler-pencil"></i><span>ruler-pencil</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-rupee"></i><span>rupee</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-save"></i><span>save</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-school-bench"></i><span>school-bench</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-school-bench-alt"></i><span>school-bench-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-scooter"></i><span>scooter</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-scroll-down"></i><span>scroll-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-search"></i><span>search</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-search-alt"></i><span>search-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-select-cursor"></i><span>select</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-seo"></i><span>seo</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-service"></i><span>service</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-share"></i><span>share</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-share-alt"></i><span>share-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shield"></i><span>shield</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shift-left"></i><span>shift-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shift-right"></i><span>shift-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ship"></i><span>ship</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shopify"></i><span>shopify</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shopping-basket"></i><span>shopping-basket</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shortcode"></i><span>shortcode</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shovel"></i><span>shovel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-shuffle"></i><span>shuffle</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-signal"></i><span>signal</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sketch"></i><span>sketch</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-skipping-rope"></i><span>skipping-rope</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-skype"></i><span>skype</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-slack"></i><span>slack</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-slice"></i><span>slice</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-slideshare"></i><span>slideshare</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-slim"></i><span>slim</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-snapchat"></i><span>snapchat</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sort-alpha-asc"></i><span>sort-alpha-asc</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sort-amount-asc"></i><span>sort-amount-asc</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sort-amount-dsc"></i><span>sort-amount-dsc</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-soundcloud-original"></i><span>soundcloud-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-soundcloud"></i><span>soundcloud</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spellcheck"></i><span>spellcheck</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spinner-solid"></i><span>spinner-solid</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spinner"></i><span>spinner</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spinner-arrow"></i><span>spinner-arrow</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spotify"></i><span>spotify</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spotify-original"></i><span>spotify-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-spray"></i><span>spray</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sprout"></i><span>sprout</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stackoverflow"></i><span>stackoverflow</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stamp"></i><span>stamp</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-star-fill"></i><span>star</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-star-empty"></i><span>star-empty</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-star-fill"></i><span>star-fill</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-star-half"></i><span>star-half</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stats-down"></i><span>stats-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stats-up"></i><span>stats-up</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-steam"></i><span>steam</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sthethoscope"></i><span>sthethoscope</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stop"></i><span>stop</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-strikethrough"></i><span>strikethrough</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stripe"></i><span>stripe</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-stumbleupon"></i><span>stumbleupon</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-sun"></i><span>sun</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-support"></i><span>support</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-surf-board"></i><span>surf-board</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-swift"></i><span>swift</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-syringe"></i><span>syringe</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-tab"></i><span>tab</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-tag"></i><span>tag</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-target"></i><span>target</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-target-customer"></i><span>target-customer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-target-revenue"></i><span>target-revenue</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-taxi"></i><span>taxi</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-teabag"></i><span>teabag</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-telegram"></i><span>telegram</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-telegram-original"></i><span>telegram-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-text-align-center"></i><span>text-align-center</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-text-align-justify"></i><span>text-align-justify</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-text-align-left"></i><span>text-align-left</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-text-align-right"></i><span>text-align-right</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-text-format"></i><span>text-format</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-text-format-remove"></i><span>text-format-remove</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-thought"></i><span>thought</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-thumbs-down"></i><span>thumbs-down</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-thumbs-up"></i><span>thumbs-up</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-thunder"></i><span>thunder</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-thunder-alt"></i><span>thunder-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ticket"></i><span>ticket</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ticket-alt"></i><span>ticket-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-timer"></i><span>timer</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-train"></i><span>train</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-train-alt"></i><span>train-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-trash-can"></i><span>trash-can</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-travel"></i><span>travel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-tree"></i><span>tree</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-trees"></i><span>trees</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-trello"></i><span>trello</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-trowel"></i><span>trowel</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-tshirt"></i><span>tshirt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-tumblr"></i><span>tumblr</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-twitch"></i><span>twitch</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-twitter"></i><span>twitter</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-twitter-fill"></i><span>twitter-fill</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-twitter-original"></i><span>twitter-original</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ubuntu"></i><span>ubuntu</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-underline"></i><span>underline</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-unlink"></i><span>unlink</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-unlock"></i><span>unlock</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-upload"></i><span>upload</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-user"></i><span>user</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-users"></i><span>users</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ux"></i><span>ux</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-vector"></i><span>vector</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-video"></i><span>video</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-vimeo"></i><span>vimeo</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-visa"></i><span>visa</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-vk"></i><span>vk</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-volume"></i><span>volume</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-volume-high"></i><span>volume-high</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-volume-low"></i><span>volume-low</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-volume-medium"></i><span>volume-medium</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-volume-mute"></i><span>volume-mute</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-wallet"></i><span>wallet</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-warning"></i><span>warning</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-website"></i><span>website</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-website-alt"></i><span>website-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-wechat"></i><span>wechat</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-weight"></i><span>weight</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-whatsapp"></i><span>whatsapp</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-wheelbarrow"></i><span>wheelbarrow</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-wheelchair"></i><span>wheelchair</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-windows"></i><span>windows</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-wordpress"></i><span>wordpress</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-wordpress-fill"></i><span>wordpress-fill</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-world"></i><span>world</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-world-alt"></i><span>world-alt</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-write"></i><span>write</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-yahoo"></i><span>yahoo</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-ycombinator"></i><span>ycombinator</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-yen"></i><span>yen</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-youtube"></i><span>youtube</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-zip"></i><span>zip</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-zoom-in"></i><span>zoom-in</span>
                                </li>
                                <li class="trigger Free">
                                    <i class="lni lni-zoom-out"></i><span>zoom-out</span>
                                </li>
                            </ul>
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
