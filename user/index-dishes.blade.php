<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>Cook-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/CSC499/assets/images/homepage/logo.png">
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
    <link href="{{asset('assets/css/dishes.css')}}" rel="stylesheet" type="text/css" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{asset('assets/images/logo__1_-removebg-preview.png')}}">
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
     {{-- <link href="{{asset('assets/css/add-dish.css')}}" rel="stylesheet" type="text/css" /> --}}

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
                                <img src="{{asset('assets/images/logo_1-removebg-preview.png')}}" alt="logo" class="logo-lg">
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
                                    <img src="{{asset('assets/images/user-1.jpg')}}" alt="user-image" class="rounded-circle">
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

                <div class="content" style="background-image: url({{asset('assets/images/Untitled\ design\ \(38\).jpg)')}}">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- chat area -->
                        <div class="col-xl-9 col-lg-8">
                            <div class="row mt-4">
                                <div class="float-start1">
                                    <a type='button' class='btns  button-previous' name='Update' value='edit'
                                        href="add-dish.html">ADD DISH<i
                                            class="mdi mdi-plus-circle-multiple-outline"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="contentl">
                                <div class="containerss">
                                    <div class="screen-togo">
                                        <ul class="menu-items">
                                            <!--    Menu Item 1    -->
                                            @foreach ($dishes as $dish)
                                            <li class="menu-item1">
                                                <img src="{{$dish->image ? asset('storage/' . $dish->image) : asset('/images/logo.png')}}" alt="" class="menu-image">
                                                <div class="menu-item-dets">
                                                    <p class="menu-item-heading">{{$dish->name}}</p>
                                                    <p class="g-price">${{$dish->price}}</p>
                                                    <div class="detail">
                                                        <form action="/dishes/{{$dish->id}}" method="POST" style="display: inline;">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('DELETE') !!}
                                                            <button type="submit" class="fonticon-wrap" style="background: none; border: none; cursor: pointer; margin-right: 10px; color: #f5700a;">
                                                                <i class="mdi mdi-delete-forever"></i>
                                                            </button>
                                                        </form>
                                                        <div class="fonticon-wrap" style="display: inline-block;">
                                                            <a href="/dishes/{{$dish->id}}/edit" class="fonticon-wrap" style="display: inline-block; color:#053b21;">
                                                                <i
                                                                class="mdi mdi-pencil-box-outline" style="color:#053b21;"></i>
                                                            </a>
                                                          </div>
                                                      
                                                    </div>
                                                </div>

                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <!-- END EDMO HTML (Happy Coding!)-->
                                    </main>
                                </div> <!-- content -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 
     <ul class="list-inline m-0">
                                    <li class="list-inline-item" >
                                        <button class="btn  btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><a href="edit-dish.html"><i class="fa fa-pen" ></i></a></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn  btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </li>
                                </ul>
 -->
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
