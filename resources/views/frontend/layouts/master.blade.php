<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant Groupe 5 - @yield('frontend_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style Start -->
    @include('frontend.layouts.inc.style')
    <!-- Style End -->
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>
    <!-- search-form here -->
    @include('frontend.layouts.inc.search')
    <!-- search-form here -->

    <!-- header-area start -->
    @include('frontend.layouts.inc.header')
    <!-- header-area end -->

    <!-- Content-area start -->
    @yield('frontend_content')
    <!-- Content-area end -->

    <!-- social-newsletter-section start -->
    @include('frontend.layouts.inc.newsletter')
    <!-- social-newsletter-section end -->

    <!-- footer-area start -->
    @include('frontend.layouts.inc.footer')
    <!-- footer-area end -->

    <!-- Modal area start -->
    @include('frontend.layouts.inc.modal')
    <!-- Modal area End -->

    <!-- Script Start -->
    @include('frontend.layouts.inc.script')
    <!-- Script End -->

</body>
<!-- Mirrored from themepresss.com/tf/html/tohoney/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 03:33:34 GMT -->

</html>