<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blogs Page</title>
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

    <div class="mt-5">
        <!-- Blogs Start -->
        <div>
            <div class="container bg-white py-5">
                <div class="row px-3">
                    <div class="col-12">
                        <h2 class="title position-relative pb-2 mb-4">Blogs</h2>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            @foreach($blog['images'] as $image)
                                <div class="col-sm-6 py-1">
                                    <img src="{{ asset(substr($image, 1)) }}" alt="" class="img-fluid">
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-5">
                            <h3>{{ $blog['title'] }}</h3>
                            <p>{{ $blog['text'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END CONTENT -->

    <!-- Footer Start -->
    @include('front.partials.footer')
    <!-- Footer End -->
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
