<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title> Restaurant groupe5 | @yield('title')</title>
    <meta name="description" content="Ecommerce Dashboard" />
    <!-- Style Start -->
    @include('backend.layouts.inc.style')
    <!-- Style End -->
</head>

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                @include('backend.layouts.inc.logo')
                <!-- Logo End -->

                <!-- User Menu Start -->
                @include('backend.layouts.inc.user-menu')
                <!-- User Menu End -->

                <!-- Icons Menu Start -->
                @include('backend.layouts.inc.icons-menu')
                <!-- Icons Menu End -->

                <!-- Menu Start -->
                @include('backend.layouts.inc.menu')
                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                @include('backend.layouts.inc.mobile-buttons')
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>

        <main>
            <div class="container mt-5">
                @yield('admin_content')
            </div>
        </main>
        <!-- Layout Footer Start -->
        @include('backend.layouts.inc.footer')
        <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    @include('backend.layouts.inc.theme-modal')
    <!-- Theme Settings Modal End -->

    <!-- Search Modal Start -->
    @include('backend.layouts.inc.search-modal')
    <!-- Search Modal End -->

    <!-- Script Start -->
    @include('backend.layouts.inc.script')
    <!-- Script End -->

</body>

</html>