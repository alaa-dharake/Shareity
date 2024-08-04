<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>User-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo (1).png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Theme Config Js -->
    <script src="{{asset('assets/js/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <style>
        ul.topbar-menu.d-flex.align-items-center {
            position: relative;
            left: 427px;
        }

        .meal-requests-list {
            list-style: none;
            padding: 0;
        }

        .meal-requests-list li {
            background: rgba(255, 255, 255, 0.8);
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .meal-requests-list li .status {
            padding: 5px 10px;
            border-radius: 5px;
        }

        .meal-requests-list li .status.pending {
            background-color: #ffc107;
            color: #fff;
        }

        .meal-requests-list li .status.accepted {
            background-color: #053b21;
            color: #fff;
        }

        .meal-requests-list li .status.rejected {
            background-color: #dc3545;
            color: #fff;
        }

        .navbar-custom {
            margin-bottom: 20px;
        }

        .content-page {
            padding-top: 20px;
        }

        /* .section-header h1 span {
            color: #007bff;
        } */
        .meal-requests-container h1{
            color: #f5700a;
            position: relative;
            text-align: center;
        }
        .meal-requests-list li span{
            color: #f5700a;
        }
        .meal-requests-list li {
            color: #053b21;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Menu ========== -->
        <x-user-header />

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <!-- ========== Topbar End ========== -->

                <div class="content" style="background-image: url(assets/images/Untitled\ design\ \(54\).jpg);">

                    <!-- Start Content-->
                    <div class="container-fluid" style="backdrop-filter: blur(5px);">
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="position: relative;top: 12px;background: transparent;">
                                    <div class="card-body">
                                        <div class="row justify-content-between mb-2">
                                            <div class="col-auto">
                                                <form class="search-bar position-relative mb-sm-0 mb-2">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="mdi mdi-magnify"></span>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="meal-requests-container">
                                            <h1>Your Campaign Requests</h1>
                                            <ul class="meal-requests-list">
                                                @foreach($campaignRequests as $request)
                                                <li> You ordered :
                                                
                                                    <span>{{ $request->campaign_name }}</span>
                                                    -
                                                    <span>{{ $request->campaign_description }}</span>
                                                    -
                                                    <span>{{ $request->campaign_meal}}</span>
                                                    for:
                                                    <span>{{ $request->campaign_date }}</span>
                                                    at:
                                                    <span>{{ $request->campaign_startTime }}</span>
                                                    -
                                                    <span>{{ $request->campaign_endTime }}</span>
                                                    <span class="status {{ strtolower($request->status) }}">{{ $request->status }}</span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

    </body>

</html>
