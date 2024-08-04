<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>Cook-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/CSC499/assets/images/homepage/logo.png')}}">
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
    <link href="{{asset('assets/css/profile.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/security.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Menu ========== -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <img src="{{asset('assets/images/logo_1-removebg-preview.png')}}" alt="logo" class="logo-lg">
                    <h1>Shareity</h1>
                </a>
            </div>
            <!-- menu-left -->
            <div class="scrollbar">
                <!-- User box -->


                <!--- Menu -->
                <ul class="menu">

                    <li class="menu-title">Navigation</li>

                    <li class="menu-item">
                        <a class="menu-link" href="index.html">
                            <span class="menu-icon"><i class="mdi mdi-account-box"></i>
                            </span>
                            <span class="menu-text"> Edit Profile</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="dishes.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-silverware"></i></span>
                            <span class="menu-text"> Dishes </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="campaigns.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-bullhorn"></i></span>
                            <span class="menu-text"> Campaigns </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Reviews.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-message-draw"></i> </span>
                            <span class="menu-text"> Reviews </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="order-details.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-cart-plus"></i> </span>
                            <span class="menu-text"> Orders </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-chat.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-message-text-outline"></i> </span>
                            <span class="menu-text"> Messages </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Security.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                            <span class="menu-text"> Security </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="/CSC499/Cooks-details.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-account-circle"></i> </span>
                            <span class="menu-text"> My Page </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/CSC499/Home.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i> </span>
                            <span class="menu-text"> Back to Home</span>
                        </a>
                    </li>

                </ul>
                <!--- End Menu -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left menu End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a href="index.html" class="logo-light">
                                <img src="{{asset('assets/images/logo-light.png')}}" alt="logo" class="logo-lg">
                                <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo" class="logo-sm">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo" class="logo-lg">
                                <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo" class="logo-sm">
                            </a>
                        </div>
                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <ul class="topbar-menu d-flex align-items-center">
                            <!-- Topbar Search Form -->
                            <li class="app-search dropdown me-3 d-none d-lg-block">
                                <form>
                                    <input type="search" class="form-control rounded-pill" placeholder="Search..."
                                        id="top-search">
                                    <span class=" fa fa-search search-icon font-16"></span>
                                </form>

                            </li>
                            <!-- Fullscreen Button -->
                            <li class="d-none d-md-inline-block">
                                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                    <i class="fa fa-window-maximize font-22" aria-hidden="true"></i>
                                </a>
                            </li>

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                    data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="{{asset('/CSC499/assets/images/homepage/chef-one.jpg')}}" alt="user-image"
                                        class="rounded-circle">
                                    <span class="ms-1 d-none d-md-inline-block">
                                        Geneva <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- ========== Topbar End ========== -->

                <div class="content" style="background-image: url({{asset('assets/images/Untitled\ design\ \(38\).jpg)')}};">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" <div id="btnwizard">
                                        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                            <li class="nav-item">
                                                <a href="#tab12" data-bs-toggle="tab"
                                                    class="nav-link rounded-0 pt-2 pb-2">
                                                    <i class="mdi mdi-account-circle me-1"></i>
                                                    <span class="d-none d-sm-inline">Tap to change your password</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mb-0 b-0 pt-0">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label type="password"  class="col-md-3 col-form-label" >Current
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control" id="userName2"
                                                                name="userName2" value="Coderthemes">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="password2">New
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="password2" name="password2"
                                                                class="form-control" value="123456789">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="confirm2">Confirm
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="confirm2" name="confirm2"
                                                                class="form-control" value="123456789">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <div class="float-start">
                                                <input type='button' class='btn btn-secondary button-previous'
                                                    name='Update' value='Update' />
                                            </div>
                                            <div class="clearfix"></div>
                                        </div> <!-- tab-content -->
                                    </div> <!-- end #btnwizard-->
                                </div> <!-- end card-body -->
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
        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

        <script src="{{asset('assets/js/profile.js')}}"></script>


</body>

</html>
