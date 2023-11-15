
<!doctype html>
<html lang="en" 
 data-layout="vertical" 
 data-sidebar="dark" 
 data-sidebar-size="lg" 
 data-theme="default" 
 data-topbar="light" 
 data-bs-theme="light"
 data-preloader="disable">
<head>

 @include('layouts.head')
 @yield('page_head')
</head>

<body> 
    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->
        @include('layouts.navbar')
        <!-- Left Sidebar End -->

    <div class="vertical-overlay"></div>
       <!-- ========== Topbar ========== -->
        @include('layouts.topbar')
        <!-- Page Content start here -->
        <div class="main-content">
            <!-- End Page-content -->
            @yield('content')
            <!-- End Page-content -->

            @include('layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button class="btn btn-dark btn-icon" id="back-to-top">
        <i class="bi bi-caret-up fs-3xl"></i>
    </button>
    <!--end back-to-top-->
@yield('page_scripts')
 @include('layouts.scripts')
 @stack('scripts')
</body>

</html>