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

	    <!-- Theme Config Js -->
	    <script src="{{asset('assets/js/head.js')}}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">


	    <!-- Bootstrap css -->
	    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <link href="{{asset('assets/css/order-details.css')}}" rel="stylesheet" type="text/css" />


	    <!-- App css -->
	    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />


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
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found 22 results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fa fa-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>


                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="{{asset('assets/images/users/user-2.jpg')}}"
                                                alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="{{asset('assets/images/users/user-5.jpg')}}"
                                                alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
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
                                        <div class="col-lg-4">
                                            <h4>Order Details</h4>
                                            <hr>
                                            <div class="border p-3 mt-4 mt-lg-0 rounded">

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name :</th>
                                                                <td>Capstone</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email : </th>
                                                                <td>Capstone@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone Number :</td>
                                                                <td>81998587</td>
                                                            </tr>
                                                            <tr>
                                                                <th>City : </th>
                                                                <td>Beirut</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Full Address :</th>
                                                                <td>Beirut-beside Hariri Hospital</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Deliver Time :</th>
                                                                <td>21:11</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total Cash :</th>
                                                                <td>$1458.3</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Ordered At :</th>
                                                                <td>14/04/2024 , 6:39 PM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive -->
                                            </div>

                                            

                                        </div> <!-- end col -->
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="table-responsive">
                                                    
                                                    <table class="table table-borderless table-nowrap table-centered mb-0">
                                                        <thead class="table-light">
                                                          
                                                            
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="{{asset('/CSC499 (2)/CSC499 (2)/CSC499/assets/images/meals/plate__chicken-salad.webp')}}" alt="contact-img"
                                                                        title="contact-img" class="rounded me-3" height="48" />
                                                                    <p class="m-0 d-inline-block align-middle font-16">
                                                                        <a href="ecommerce-product-detail.html" class="text-reset font-family-secondary">Polo Navy blue T-shirt</a>
                                                                        <br>
                                                                        <small class="me-2">$23 </small>
                                                                    </p>
                                                                </td>
                                                            
                                                                
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"><P>1 items</P></a>
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="{{asset('/CSC499 (2)/CSC499 (2)/CSC499/assets/images/meals/plate__french-fries.webp')}}" alt="contact-img"
                                                                        title="contact-img" class="rounded me-3" height="48" />
                                                                    <p class="m-0 d-inline-block align-middle font-16">
                                                                        <a href="ecommerce-product-detail.html" class="text-reset font-family-secondary">Polo Navy blue T-shirt</a>
                                                                        <br>
                                                                        <small class="me-2">$23 </small>
                                                                    </p>
                                                                </td>
                                                               
                                                                
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"><P>6 items</P></a>
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->

                                               

                                            <!-- end col -->

                                           

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
