<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @if($user)
        <title>{{ $user->fullname }} - Personal CV Website Template</title>
    @else
        <title>Name Surname - Personal CV Website Template</title>
    @endif
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Global style/script files-->
    @include('front.assets.css.global')
    @yield('headerCssJs')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('front_files/css/style.css')}}" rel="stylesheet"/>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
<div class="wrapper">
    <div class="sidebar">
        <!-- Profile Start -->
        @include('front.partials.profile')
        <!-- Profile End -->
    </div>

    <div class="content">
        <!-- About Start -->
        @include('front.partials.about')
        <!-- About End -->

        <!-- Skills Start -->
        @include('front.partials.skills')
        <!-- Skills End -->

        <!-- Education Start -->
        @include('front.partials.experiences')
        <!-- Education End -->

        <!-- Portfolio Start -->
        @include('front.partials.portfolio')
        <!-- Portfolio End -->

        <!-- Courses Start -->
        @include('front.partials.courses')
        <!-- Courses End -->

        <!-- Contact Start -->
        @include('front.partials.contact')
        <!-- Contact End -->

        <!-- Footer Start -->
        @include('front.partials.footer')
        <!-- Footer End -->
    </div>
    <!-- END CONTENT -->
</div>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- Common JS files -->
@include('front.assets.js.global')

<!-- Spesific Page Js files -->
@yield('footerJS')

<!-- Manual JS file-->
<script src="{{asset('front_files/js/main.js')}}"></script>
</body>
</html>
