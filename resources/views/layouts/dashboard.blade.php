
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
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">CRM</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">CRM</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded">
                                            <i class="ph ph-briefcase"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="368.24">0</span>M </h4>
                                    <p class="text-muted mb-4">Annual Profit</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 4.65%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 76%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded">
                                            <i class="ph ph-wallet"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="1454.71">0</span>k </h4>
                                    <p class="text-muted mb-4">Daily average income</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 1.33%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 88%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-danger-subtle text-danger fs-3xl rounded">
                                            <i class="bi bi-broadcast"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="33.37"></span>%</h4>
                                    <p class="text-muted mb-4">Lead Conversations</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 2.69%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 18%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-success-subtle text-success fs-3xl rounded">
                                            <i class="ph ph-rocket-launch"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="648"></span></h4>
                                    <p class="text-muted mb-4">Campaign Sent</p>
                                    <p class="text-muted mb-0"><span class="badge bg-danger-subtle text-danger"><i class="bi bi-arrow-down"></i> 0.78%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 49%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                                            <i class="ph ph-heartbeat"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="1742"></span></h4>
                                    <p class="text-muted mb-4">Annual Deals</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 7.93%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 83%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

          

                </div>
                <!-- container-fluid -->
            </div>
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

 @include('layouts.scripts')
</body>

</html>