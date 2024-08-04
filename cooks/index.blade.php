<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>User-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo (1).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Theme Config Js -->
    <script src="/public/Profile/profile/js/head.js"></script>

    <!-- Bootstrap css -->
    <link href="/public/Profile/profile/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="/public/Profile/profile/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="/public/Profile/profile/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/public/Profile/profile/css/profile.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Menu ========== -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <div class="logo-box">
                <a href="index.html" class="logo-light">
                    <img src="assets/images/logo__1_-removebg-preview.png" alt="logo" class="logo-lg">
                    <h1>Shareity</h1>
                </a>
            </div>

            <!-- menu-left -->
            <div class="scrollbar">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block"
                            data-bs-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>


                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted mb-0">Admin Head</p>
                </div>

                <!--- Menu -->
                <ul class="menu">

                    <li class="menu-title">Navigation</li>

                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-user-circle" aria-hidden="true"></i> </span>
                            <span class="menu-text"> Profile </span>
                            <!-- <span class="badge bg-success rounded-pill ms-auto">4</span> -->
                        </a>
                    </li>
                    


                    <li class="menu-item">
                        <a href="apps-chat.html" class="menu-link">
                            <span class="menu-icon"><i data-feather="message-square"></i></span>
                            <span class="menu-text"> Chat </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-icon"><i data-feather="shopping-cart"></i></span>
                            <span class="menu-text"> My Cart </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuEcommerce">
                            <ul class="sub-menu">
                                
                                <li class="menu-item">
                                    <a href="ecommerce-orders.html" class="menu-link">
                                        <span class="menu-text">Orders</span>
                                    </a>
                                </li>
                               
                                <li class="menu-item">
                                    <a href="ecommerce-cart.html" class="menu-link">
                                        <span class="menu-text">Shopping Cart</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-checkout.html" class="menu-link">
                                        <span class="menu-text">Checkout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="Security.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-lock" aria-hidden="true"></i>                            </span>
                            <span class="menu-text"> Security</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-companies.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i>                            </span>
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
                            <a href="index.html" class="logo-light">
                                <img src="assets/images/logo__1_-removebg-preview.png" alt="logo" class="logo-lg">
                                <h1>Shareity</h1>
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
                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
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

            <div class="content" style="background-image: url(assets/images/Untitled\ design\ \(54\).jpg);">

                <!-- Start Content-->
                <div class="container-fluid" style="backdrop-filter: blur(5px);">
                    <!-- chat area -->
                    <div class="col-xl-9 col-lg-8">

                        <div class="card">
                            <div class="card-body py-2 px-3 border-bottom border-light">
                                <div class="row justify-content-between py-1">
                                    <div class="col-sm-7">
                                        <div class="d-flex align-items-start">
                                            <div class="container">
                                                <div class="forms">
                                                <div class="row mt-4">
                                                    <div class="float-start1">
                                                        <a type='button' class='btns  button-previous' name='Update'
                                                            value='edit'>EDIT </a>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="float-start1">
                                                        <a type='button' class='btns  button-previous' name='Update'
                                                            value='Update'>SAVE </a>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload" class="fa fa-pen"></label>
                                                    </div>
                                                    <div>
                                                        <div id="imagePreview">
                                                            <img id="uploadedImage" src="/CSC499/assets/images/homepage/chef-one.jpg" class="me-2 rounded-circle" height="200" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <form action="#">
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="text" required>
                                                        <div class="underline"></div>
                                                        <label for="">Name</label>
                                                    </div>
                                                    <div class="input-data">
                                                        <input type="text" required>
                                                        <div class="underline"></div>
                                                        <label for="">Region</label>
                                                    </div>
                                                </div class="forms" >
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="text" required>
                                                        <div class="underline"></div>
                                                        <label for="">Phone</label>
                                                    </div>
                                                    <div class="input-data">
                                                        <input type="text" required>
                                                        <div class="underline"></div>
                                                        <label for="">Address</label>
                                                    </div>
                                                </div>
                                            <!-- <div class="forms">
                                                <div class="form-row">
                                                    <div class="input-data textarea">
                                                        <div class="form-row submit-btn">
                                                            <div class="input-data">
                                                                <div class="inner"></div>
                                                                <input type="submit" value="edit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="input-data textarea">
                                                        <div class="form-row submit-btn">
                                                            <div class="input-data">
                                                                <div class="inner"></div>
                                                                <input type="submit" value="save">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </form> -->
                                        </div>
                                        <button class="btn btn-delete">
                                            <span class="mdi mdi-delete mdi-24px"></span>
                                            <span class="mdi mdi-delete-empty mdi-24px"></span>
                                            <span>Delete account permanently</span>
                                          </button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card -->
                    </div>
                    <!-- end chat area-->

                </div> <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->


    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->



    <!-- Vendor js -->
    <script src="/public/Profile/profile/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/public/Profile/profile/js/app.min.js"></script>

    <script src="{{asset('assets/js/dropdown.js')}}"></script>


</body>

</html>