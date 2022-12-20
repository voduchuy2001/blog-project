<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.layouts.css')

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.left-sidebar')
        <!-- Left Sidebar End -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('admin.layouts.top-bar')
                <!-- end Topbar -->
                <!-- Start Content-->
                @yield('content')
            </div> <!-- content -->
        </div>

    </div>
    <!-- END wrapper -->

    @include('admin.layouts.js')

</body>

</html>