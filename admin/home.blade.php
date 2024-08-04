<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Fonts and Icons -->
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/vendors_css.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/assets/vendor_components/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/assets/vendor_components/fullcalendar/fullcalendar.print.min.css') }}">
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <x-admin-header/>
        
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        {{-- Uncomment to include donations chart --}}
                        {{-- <div class="col-xl-4 col-lg-6 col-12">
                            @include('admin.donations-chart')
                        </div> --}}
                        
                        <div class="col-xl-4 col-lg-6 col-12">
                            @include('admin.users-growth')
                        </div>
                        
                        <div class="col-xl-4 col-lg-6 col-12">
                            @include('admin.chef-growth')
                        </div>
                        
                        <div class="col-xl-4 col-lg-6 col-12">
                            @include('admin.chef-by-state')
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-12">
                            @include('admin.dashboard')
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-12">
                            <!-- Sold Dishes and Active Campaigns Count -->
                            <div class="box pull-up">
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="box-body pt-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="text-dark mb-0 fw-500">{{ $soldDishesCount }}</h3>
                                            <p class="text-mute mb-0">Sold Dishes</p>
                                        </div>
                                        <div class="icon bg-info-light h-60 w-60 rounded-circle">
                                            <i class="text-info mr-0 fs-20 fa fa-utensils"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body pt-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="text-dark mb-0 fw-500">{{ $activeCampaignsCount }}</h3>
                                            <p class="text-mute mb-0">Total Campaigns Done</p>
                                        </div>
                                        <div class="icon bg-primary-light h-60 w-60 rounded-circle">
                                            <i class="text-primary mr-0 fs-20 fa fa-area-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Donations This Week -->
                            <div class="box">
                                @include('admin.weekly-donations')
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12">
                            @include('admin.meals-distribution')
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12">
                            @include('admin.monthly-meals-data')
                        </div>

                        <div class="col-xl-8 col-12">
                            <!-- Campaigns List -->
                            <div class="box">
                                <div>
                                    @include('admin.campaigns')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/template.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/jquery-knob/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/template.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/dashboard3.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/calendar.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/c3/d3.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/c3/c3.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/echarts/dist/echarts-en.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/c3-bar-pie.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/chart.js-master/Chart.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/widget-charts2.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/c3-data.js') }}"></script>
</body>
</html>
