<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>John Doe - Personal CV Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Global style/script files-->
    @include('front.assets.css.global')
    @yield('headerCssJs')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
    <!-- Header section -->
    @include('front.layouts.header')


    <!-- Main Content-->
    @yield('mainContent')


    <!-- Footer section -->
    @include('front.layouts.footer')

    <!-- Common JS files -->
    @include('front.assets.js.global')
    <!-- Spesific Page Js files -->
    @yield('footerJS')
    <!-- Manual JS file-->
    <script src="{{asset('front/js/scripts.js')}}"></script>
</body>
</html>
