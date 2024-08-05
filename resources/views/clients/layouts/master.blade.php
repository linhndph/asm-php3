<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 16:09:30 GMT -->

<head>
    @include('clients.layouts.partials.head')
</head>

<body>
    <div class="canvas-wrapper">
        {{-- sidebar --}}
        @include('clients.layouts.partials.sidebar')

        <div class="content-wrap">
            <div class="content">
                <!-- header start -->
                <header class="header-area home-style-2">
                    @include('clients.layouts.partials.header')
                </header>
                <!-- header end -->
                <!-- mobile-menu-area start -->

                <!-- mobile-menu-area end -->
                <!-- slider start -->

                <!-- slider end -->
                <!-- banner style 2 start -->
                @yield('content')

                <!-- blog area end -->
                <!-- footer area start -->
                <footer class="footer-area">
                    @include('clients.layouts.partials.footer')
                </footer>
                <!-- footer area end -->
                <!-- quick view start -->

                <!-- quick view end -->
            </div>
            <!-- content end -->
        </div>
        <!-- content-wrap end -->
    </div>






    <!-- all js here -->

</body>

@include('clients.layouts.partials.linkjs')
<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 16:09:57 GMT -->

</html>
