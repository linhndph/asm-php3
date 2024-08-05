<!doctype html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from html.phoenixcoded.net/light-able/bootstrap/dashboard/finance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 11:03:13 GMT -->

<head>

    @include('admins.layouts.partials.head')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
    <!-- [ Pre-loader ] start -->

    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    @include('admins.layouts.partials.nav')
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        @include('admins.layouts.partials.header')
    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        @yield('content')
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
        @include('admins.layouts.partials.footer')
    </footer>
    <!-- [Page Specific JS] start -->
    @include('admins.layouts.partials.linkjs')

</body>
<!-- [Body] end -->

<!-- Mirrored from html.phoenixcoded.net/light-able/bootstrap/dashboard/finance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 11:03:16 GMT -->

</html>
