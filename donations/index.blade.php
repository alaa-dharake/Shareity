<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/CSC499/assets/images/homepage/logo.png">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/navbar1.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/footer.css')}}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <img class="imageeee" src="{{asset('assets/images/homepage/logo.png')}}" />
        <div class="containerv d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Shareity<span>.</span></h1>

                <!-- <img class="imageeee" src="assets/images/homepage/logo.png" /> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/CSC499 (2)/CSC499 (2)/CSC499/Home.html">HOME</a></li>
                    <li><a href="dishes1.html">DISHES</a></li>
                    <li><a href="Cooks.html">COOKS</a></li>
                    <li><a href="Donations/Donations/index.html">DONATION</a></li>
                    <li><a href="/colorlib-regform-7/colorlib-regform-7/index.html">COOK</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="dropdown-container">
                <details class="dropdown right">
                    <summary class="avatar">
                        <img src="{{asset('assets/images/chef-one.jpg')}}">
                    </summary>
                    <ul>
                        <!-- Optional: user details area w/ gray bg -->
                        <li>
                            <p>
                                <summary class="avatar">
                                    <img src="{{asset('assets/images/chef-one.jpg')}}">
                                </summary>
                                <span class="block bold">Jane Doe</span>
                            </p>
                        </li>
                        <li class="divider"></li>
                        <!-- Menu links -->
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">account_circle</span> Account
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">chat</span> Chat
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">help</span> Help
                            </a>
                        </li>
                        <!-- Optional divider -->
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">logout</span> Logout
                            </a>
                        </li>
                    </ul>
                </details>
            </div>
            <!-- <div class="dropdown-container1">
        <details class="dropdown right">
        
        </details>
    </div> -->
            <!-- END: Dropdown Container -->

            <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>

        </div>
    </header><!-- End Header -->

    <!-- About Start -->
    <div class="about">
        <div class="containers">
            <div class="row1 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="{{asset('assets\images\food-donation.jpg')}}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <h1 class="headings">Donate<span>learn about us</span></h1>
                      </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Donate Now!</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container1 tab-pane active">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis.
                                Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis
                                porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum. Phasellus et
                                felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque.
                                Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.
                            </div>
                            <div id="tab-content-2" class="container1 tab-pane fade">
                                <div class="container1" id="mainContainer">
                                    <p>Select gift frequency</p>
                                    <div class="time">
                                        <span onclick="showMonthly()">Monthly</span>
                                        <span onclick="showOnetime()">Onetime</span>
                                    </div>
                                    <!-- Add a div to hold the extra information for Onetime -->
                                    <div class="onetime-info">
                                        <p>This is a one-time donation.</p>
                                    </div>
                                    <p>Select Amount</p>
                                    <div class="value">
                                        <span class="money">$15</span>
                                        <span class="money">$30</span>
                                        <span class="money">$40</span>
                                        <span class="money">$50</span>
                                        <span class="money">$60</span>
                                        <span class="money" onclick="showInputWithSymbol()">Other</span>
                                    </div>

                                    <div class="confirm">
                                        <input type="checkbox" name="" id="">
                                        <span>Yes'll generously add $0.30 each month to cover the transaction</span>
                                    </div>
                                    <div class="input">
                                        <p>Name</p>
                                        <input type="text" name="" id="" placeholder="Enter your name">

                                        <p>Email</p>
                                        <input type="text" name="" id="" placeholder="Enter your email">

                                    </div>
                                    <p>Give in honor to another person</p>
                                    <button>Donate now</button>
                                    <p>By donating, you agree to our <span class="blue">terms of service</span> and
                                        <span class="blue">privacy
                                            policy</span></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container1">
            <div class="section-header">
                <h1 class="headings">Donation<span>What we do</span></h1>
              </div>
            <div class="row1">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-diet"></i>
                        </div>
                        <div class="service-text">
                            <h3>Healthy Food</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-text">
                            <h3>Pure Water</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                        <div class="service-text">
                            <h3>Health Care</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Primary Education</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Residence Facilities</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-social-care"></i>
                        </div>
                        <div class="service-text">
                            <h3>Social Care</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container-footer">
      <div class="row-footer">
        <div class="footer-cols">
          <img src="{{asset('assets/images/homepage/logo.png')}}" height="200px" width="200px" style="background-color: white;border-radius: 600px;">
          
          <!-- <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul> -->
        </div>
        <div class="footer-col">
          <h4>PAGES</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About-Us</a></li>
            <li><a href="#">Campaigns</a></li>
            <li><a href="#">Chefs</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact-Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Other Pages</h4>
          <ul>
            <li><a href="#">Dishes</a></li>
            <li><a href="#">Cooks</a></li>
            <li><a href="#">Donation</a></li>
            <li><a href="#">Cook</a></li>
            <li><a href="#">Campaigns</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Donation</h4>
          <ul>
            <li><a href="#">Donate</a></li>
            <li><a href="#">What we do</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Campaigns</h4>
          <ul>
            <li><a href="#">Donate</a></li>
            <li><a href="#">What we do</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <h1>SHAREITY</h1>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script> -->
    <script src="{{asset('assets/js/parallax.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <!-- <script src="mail/jqBootstrapValidation.min.js"></script> -->
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets\js\nav1.js')}}"></script>

    <script>
        function showMonthly() {
            $('.onetime-info').hide();
        }

        function showOnetime() {
            $('.onetime-info').show();
        }

        function showInputWithSymbol() {
            // Check if an input field already exists
            var existingInput = document.getElementById('donationAmount');

            // If an input field already exists, focus on it and return
            if (existingInput) {
                existingInput.focus();
                return;
            }

            // Get the "Other" span element
            var otherSpan = document.querySelector('.money');

            // Create an input field with a fixed "$" symbol
            var inputField = document.createElement('input');
            inputField.setAttribute('type', 'number');
            inputField.setAttribute('id', 'donationAmount');
            inputField.setAttribute('placeholder', '$ Other');
            inputField.setAttribute('min', '0');
            inputField.value = '$';

            // Replace the "Other" span with the input field
            otherSpan.parentNode.replaceChild(inputField, otherSpan);
        }

    </script>
</body>

</html>