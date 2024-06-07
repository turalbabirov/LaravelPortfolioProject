<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('admin_files/assets/images/favicon.svg')}}" type="image/x-icon" />
    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>
    <!-- Global style/script files-->
    @include('admin.assets.css.global')
    @yield('headerCssJs')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('admin_files/assets/css/main.css')}}" rel="stylesheet" />
</head>
<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->


    <!-- ======== sidebar-nav start =========== -->
    @include('admin.layouts.sidebar')
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        @include('admin.layouts.header')
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        @yield('mainContent')
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        @include('admin.layouts.footer')
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->


    <!-- Common JS files -->
    @include('admin.assets.js.global')
    <!-- Spesific Page Js files -->
    @yield('footerJS')
    <!-- Manual JS file-->
    <script src="{{ asset('admin_files/assets/js/scripts.js') }}"></script>
</body>
</html>
