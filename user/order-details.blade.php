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
    <script src="{{asset('assets/js/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <link href="{{asset('assets/css/checkout.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('../assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Menu ========== -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <div class="logo-box">
                <a href="index.html" class="logo-light">
                    <img src="{{asset('assets/images/logo_1-removebg-preview.png')}}" alt="logo" class="logo-lg">
                    <h1>Shareity</h1>
                </a>
            </div>

            <!-- menu-left -->
            <div class="scrollbar">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
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
                        <a href="index.html"  class="menu-link">
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
                                <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
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

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <div class="content" style="background-image: url({{asset('assets/images/Untitled\ design\ \(56\).jpg')}});">

                <!-- Start Content-->
                <div class="container-fluid" style="backdrop-filter: blur(5px);">


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class=" p-3 mt-4 mt-lg-0 rounded">
                                                <table class="table table-borderless table-nowrap table-centered mb-0">
                                                    <h4>Order Details With Cook 01</h4>
                                                    <div class="pagewrap">
                                                        <div class="container">
                                                            <input class="container__input" type="text" id="username"
                                                                name="username" value="" required>
                                                            <label id="userLabel" for="username"
                                                                class="container__label">Username</label>
                                                        </div>
                                                        <div class="container">
                                                            <input class="container__input" type="location" id="pass"
                                                                name="password" value="" required>
                                                            <label id="passLabel" for="pass"
                                                                class="container__label">Region</label>
                                                        </div>
                                                        <div class="container">
                                                            <input class="container__input" type="address" id="pass"
                                                                name="address" value="" required>
                                                            <label id="passLabel" for="address"
                                                                class="container__label">Address</label>
                                                        </div>
                                                        <div class="container">
                                                            <input class="container__input" type="phonenumber"
                                                                name="phone number" value="" required>
                                                            <label id="passLabel" for="Phone"
                                                                class="container__label">phone</label>
                                                        </div>
                                                        <div class="container">
                                                            <input class="container__input" type="time" name="time"
                                                                value="" required>
                                                            <label id="passLabel" for="pass"
                                                                class="container__label">time</label>
                                                        </div>
                                                    </div>
                                                    <!-- action buttons-->
                                                    <div class="row mt-4">
                                                        <div class="float-start1">
                                                            <a type='button' class='btn  button-previous' name='Update'
                                                                value='Update'><i class="mdi mdi-cart-plus me-1"></i>
                                                                ORDER </a>
                                                        </div>
                                                    </div>
                                                </table>
                                            </div> <!-- end table-responsive-->




                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-4">
                                            <div class=" p-3 mt-4 mt-lg-0 rounded">
                                                <h4 class="header-title mb-3">Order Summary</h4>

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Grand Total :</td>
                                                                <td>$1571.19</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Discount : </td>
                                                                <td>-$157.11</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping Charge :</td>
                                                                <td>$25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Estimated Tax : </td>
                                                                <td>$19.22</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total :</th>
                                                                <th>$1458.3</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive -->
                                            </div>



                                        </div> <!-- end col -->

                                    </div> <!-- end row -->
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
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
</body>

</html>
