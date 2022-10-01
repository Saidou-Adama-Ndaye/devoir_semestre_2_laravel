@extends('frontend.layouts.master')

@section('frontend_title')
    Home Page
@endsection

@section('frontend_content')

<!-- slider-area start -->
@include('frontend.pages.widgets.slider')
<!-- slider-area end -->

<!-- featured-area start -->
@include('frontend.pages.widgets.featured')
<!-- featured-area end -->

<!-- count-down-section start -->
@include('frontend.pages.widgets.countdown')
<!-- count-down-section end -->

<!-- best seller product-area start -->
@include('frontend.pages.widgets.best-seller')
<!-- best seller product-area end -->

<!-- latest product-area start -->
@include('frontend.pages.widgets.latest-product')
<!-- latest product-area end -->

<!-- testimonial-area start -->
@include('frontend.pages.widgets.testimonial')
<!-- testimonial-area end -->

@endsection
