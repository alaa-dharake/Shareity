<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- Icons Link -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <link href="https://fontawesome.com/icons/circle-arrow-down-left?f=sharp&s=thin" rel="shortcut icon" />
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="/Profile/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
  
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/css/navbar.css"> -->
  <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/navbar1.css')}}">
  <!-- <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css"> -->
  <link rel="stylesheet" href="{{asset('assets/css/vendor/aos/aos.css')}}">
  <!-- Vendor CSS Files -->
  <!-- <link href="assets/yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="{{asset('assets/yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/yummy/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/yummy/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Shareity</title>

</head>

<body>

  <!-- ======= Header ======= -->
 <x-header/>
   <!-- Utilize Cart Menu Start -->


  <section class="mainsection" id="hero"
    style="background-image: url({{asset('assets/images/homepage/Untitled\ design\ \(19\).jpg')}}); ">



    <main id="hero-section">

      <!-- hero content -->
      <div class="hero-content" style="object-position: 100%; position: relative; z-index: 2;">
        <div class="textBox">
          <h1 class="headings">shareity <span>share your meal with</span></h1>
          <p>Transforming surplus into sustenance. Explore our platform and help us bridge the gap between abundance and
            hunger. Join the movement today.</p>
            <button class="button-learn"><a href="#main">Learn More</a>
              <div class="icon-learn-1">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 58.56 116.18" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M51.68 79.32c-5.6,0.48 -18.01,6.61 -22.08,10.58 -0.8,0.78 -1.48,1.77 -2.33,2.43 0.46,-1.76 1.17,-3.5 1.71,-5.18 2.05,-6.36 0.6,-3.94 6.72,-6.92 4.39,-2.13 7.93,-4.39 11.48,-7.91 2.87,-2.84 6.6,-7.49 8.43,-10.95 -3.22,0.75 -8.91,3.73 -12.2,5.14 -3.4,1.56 -7.64,4.64 -10.05,7.42l1.92 -7.77c0.18,-0.6 12.35,-10.32 15.54,-15.33 3.24,-5.07 5.83,-12.73 7.72,-18.52 -3.83,2.95 -11.19,10.7 -14.1,14.29 -2.1,2.58 -4.06,5.29 -6.05,7.95 0.13,-1.52 1.01,-4.66 1.36,-6.17 2.16,-9.19 5.06,-41.4 -1.01,-48.38 0,3.22 -1.49,12.51 -2.05,15.9 -1.29,7.79 -4.08,25.67 -3.07,33.01l0.47 8.51c0.07,2.12 -0.24,6.17 -1.45,7.91 0,-8.9 -9.67,-35.19 -16.51,-40.2 0,5.82 4.29,23.1 6.2,27.9 1.71,4.29 4.8,10.38 7.54,14 1.93,2.55 2.5,2.41 -0.02,9.43l-3.29 11.08 -3.9 -12.16c-2.78,-6.77 -11.01,-23.67 -15.86,-26.92 0,11.78 8.37,33.86 19.11,40.13 -0.29,2.07 -3.42,10.31 -4.93,11.77 -1.78,-10.97 -7.2,-20.86 -13.98,-29.49l-7.03 -8.05c0.06,2.73 1.9,7.3 2.51,10.1 0.36,0.47 3.98,11.12 9.2,19.09 2.49,3.81 6.41,7.11 8.48,10.28 -1.04,3.19 -5.75,9.78 -8.03,12.98l1.81 0.91c2.75,-2.62 8.6,-12.41 9.74,-15.89 6.1,-3.14 7.06,-2.33 14.56,-7.45 5.18,-3.54 5.49,-4.51 8.86,-8.02 1.06,-1.1 4.21,-4.24 4.55,-5.5z" class="fil0"></path></g></svg>
              </div>
              <div class="icon-learn-2">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 55.37 64.87" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M17.94 25.14c-0.18,-1.53 1.57,-1.52 1.75,-0.4 0.06,0.34 0.08,0.73 0.12,1.08 0.96,7.92 2.52,16.37 6.09,23.51 0.84,1.68 2.15,3.87 3.34,5.34l1.71 1.96c0.21,0.21 0.41,0.44 0.63,0.62 0.14,0.11 0.2,0.14 0.33,0.27 0.11,0.1 0.19,0.19 0.31,0.29 0.46,0.39 0.89,0.75 1.39,1.12 1.42,1.03 3.07,1.95 4.78,2.59 4.8,1.81 10.13,1.83 15.23,1.06 0.68,-0.1 1.49,-0.25 1.7,0.53 0.1,0.38 -0.02,0.7 -0.25,0.91 -0.25,0.23 -0.57,0.25 -0.95,0.31 -6.48,1.02 -13.05,0.8 -18.88,-2.26 -0.54,-0.28 -1.06,-0.59 -1.55,-0.91 -1.08,-0.69 -1.86,-1.29 -2.8,-2.12 -1.08,-0.95 -2.08,-2.07 -2.99,-3.18 -0.09,-0.11 -0.19,-0.22 -0.27,-0.33 -0.11,-0.14 -0.14,-0.2 -0.25,-0.35 -0.67,-0.86 -1.38,-1.96 -1.97,-3 -1.94,-3.37 -3.24,-6.71 -4.35,-10.45 -1.57,-5.32 -2.45,-10.73 -3.12,-16.59zm12.76 2.95l-0.16 0.32c-0.03,0.1 -0.06,0.19 -0.1,0.31 -0.07,0.23 -0.11,0.41 -0.1,0.68 0.7,0.23 2.41,-0.38 3.05,-0.59 0.89,-0.28 2.2,-0.58 3.26,-0.52 0.54,0.11 0.77,0.01 1.5,0.32 1.35,0.57 1.98,1.9 1.88,3.46 -0.18,2.6 -1.89,5.58 -3.27,7.62 -1.14,1.69 -1.96,2.53 -2.55,4.68 -0.14,0.52 -0.58,2.64 -0.37,3.11 0.04,0.78 0.27,1.67 0.88,1.87 0.69,0.23 1.58,-0.27 2.09,-0.51 1.19,-0.57 2.65,-1.28 4.2,-1.17 0.47,0.17 0.93,0.28 1.29,0.82 0.89,1.35 0.28,3.98 -0.03,5.37 -0.56,2.55 -1.02,4.24 -2.3,6.18 -0.98,1.5 -2.32,0.23 -1.64,-0.79l0.79 -1.31c0.25,-0.47 0.44,-0.95 0.62,-1.49 0.29,-0.85 1.81,-6.41 0.98,-6.99 -0.73,-0.15 -2.4,0.67 -3.05,0.96 -0.92,0.41 -1.89,0.96 -3.13,0.76 -1.1,-0.18 -1.79,-0.94 -2.15,-1.86 -0.92,-2.34 -0.05,-5.92 1.17,-8.12 0.31,-0.56 1.18,-1.73 1.62,-2.39 1.23,-1.84 3.04,-4.85 3.04,-7.02 -0,-1.47 -0.98,-1.79 -2.39,-1.65 -2.03,0.2 -4.88,1.83 -6.51,0.78 -1.77,-1.14 -0.01,-4.42 0.72,-5.77 0.94,-1.77 1.85,-3.64 2.25,-5.76 0.22,-1.16 0.3,-2.53 -0.22,-3.5 -0.63,-1.19 -1.54,-0.93 -2.94,-0.72 -1.97,0.3 -5.63,0.78 -5.21,-2.29 0.13,-0.97 0.68,-2.13 1.08,-2.94 0.81,-1.65 -0.34,-3.83 -1.4,-5.04 -0.81,-0.93 -1.35,-1.61 -2.77,-2.25 -1.96,-0.88 -4.54,-1.12 -6.78,-0.45 -1.07,0.32 -1.99,0.83 -2.56,1.45 -0.81,0.88 -0.88,1.98 -0.58,3.1 0.53,2 2.19,4.52 1.75,6.1 -0.65,2.33 -4.54,1.44 -6.24,1.38 -0.62,-0.02 -1.3,-0.07 -1.84,0.13 -0.53,0.2 -0.75,0.54 -0.87,1.14 -0.26,1.27 0.26,2.13 0.74,3.07 0.96,1.86 1.9,4.14 -0.72,5.38 -1.17,0.56 -1.73,0.29 -1.91,1.1 -0.07,0.3 -0.05,0.56 -0.02,0.88 0.18,1.78 1.57,3.95 3.47,4.56 1.85,0.6 3.93,1.44 5.46,2.57 3.24,2.38 2.89,5.46 -0.07,7.33 -0.41,0.26 -0.82,0.49 -1.28,0.73 -1.52,0.82 -2.36,2.16 -1.84,3.96 0.53,1.85 2.28,3.21 4.28,3.75 1.03,0.28 2.47,0.35 3.59,0.45 1.21,0.11 2.41,0.26 3.56,0.47 0.8,0.15 2.38,0.53 2.84,1.18 1.14,1.63 -0.3,2.83 -1.1,4.06 -1.1,1.71 -1.07,2.84 0.76,3.8 2.11,1.1 5.85,1.41 8.43,1.62 0.49,0.04 1.37,0.01 1.7,0.3 0.35,0.31 0.39,1.03 0,1.36 -0.4,0.34 -1.09,0.2 -1.72,0.15 -4.21,-0.34 -14.48,-1.03 -11,-7.64 0.29,-0.54 0.46,-0.75 0.79,-1.22 0.17,-0.25 0.72,-0.88 0.75,-1.25 -0.51,-0.55 -3.45,-0.86 -4.45,-0.96 -1.52,-0.16 -3.44,-0.23 -4.78,-0.63 -0.86,-0.25 -2.06,-0.78 -2.74,-1.33 -0.27,-0.22 -0.53,-0.4 -0.74,-0.62 -0.44,-0.44 -0.82,-0.86 -1.21,-1.5 -0.34,-0.56 -0.64,-1.22 -0.78,-1.92 -0.35,-1.69 0.16,-3.13 0.99,-4.16 0.96,-1.19 2.01,-1.47 3.17,-2.25 1.32,-0.89 1.83,-2.13 0.73,-3.4 -0.71,-0.82 -1.97,-1.57 -3.23,-2.14 -0.61,-0.27 -1.27,-0.54 -1.94,-0.77 -0.7,-0.24 -1.38,-0.43 -1.94,-0.77 -2.17,-1.32 -4.07,-4.74 -3.37,-7.22 0.53,-1.86 2.03,-1.63 3.09,-2.28 0.72,-0.45 0.4,-1.23 0.08,-1.9 -0.89,-1.87 -2.23,-3.88 -0.97,-6.21 1.74,-3.2 6.8,-0.58 8.6,-1.68 0.09,-0.82 -1.14,-3.25 -1.52,-4.39 -0.59,-1.77 -0.75,-3.18 0.19,-4.78 1.36,-2.32 4.94,-3.53 8.6,-3.1 1.68,0.2 3.16,0.69 4.44,1.48 2.22,1.36 4.56,4.61 4.45,7.38 -0.04,0.91 -0.37,1.53 -0.7,2.25 -0.2,0.45 -0.78,1.66 -0.69,2.23 1.33,0.67 4.4,-0.75 6.12,-0.06 1.64,0.66 2.44,2.24 2.44,4.47 0,2.61 -1.32,5.68 -2.5,7.91 -0.21,0.4 -1.09,2.03 -1.07,2.36z" class="fil0"></path></g></svg>
              </div>
            </button>
        </div>



      </div>
      </div>
      <div class="hero-img-container" data-aos="fade-in" data-aos-delay="700">
        <!-- <div class="backgrond-ele">
                    <div class="ellipse"></div>
                    <div class="ellipse"></div>
                    <div class="ellipse"></div>
                </div> -->

        <div class="forground-elements">
          <img id="image1" src="{{asset('assets/images/meals/Untitled_design__16_-removebg-preview.png')}}" data-aos="zoom-in"
            data-aos-delay="0" class="hero-img" alt="">
          <img id="image2" src="{{asset("assets/images/meals/Untitled_design__21_-removebg-preview.png")}}" data-aos="zoom-in"
            data-aos-delay="150" class="hero-img" alt="">
          <img id="image3" src="{{asset('assets/images/meals/Untitled_design__15_-removebg-preview.png')}}" data-aos="zoom-in"
            data-aos-delay="300" class="hero-img" alt="">
        </div>



      </div>

    </main>
  </section>
  <main id="main">

    <!--About-US Section-->
    <section class="about" id="about">
      <div class="container" data-aos="fade-up">
        <h1 class="headings">about us <span>why choose us</span></h1>

        <div class="row">
          <div class="image">
            <img src="{{asset('assets/images/about/foodshare1.png')}}" alt="" style="min-width: 700px;">
          </div>
          <div class="content">
            <div class="content-header">
              <h1>Why people use shareITY?</h1>
            </div>
            <div class="content-body">
              <p>
                Welcome to our platform, where sharing and caring intersect seamlessly. We provide a dynamic space for
                individuals to share and donate food or surplus items, fostering a community built on compassion and
                sustainability. Our platform serves as a vital bridge, connecting those with excess food to spare with
                those in need, thereby reducing waste and addressing food insecurity simultaneously. What sets us apart
                is our commitment to convenience, security, and impact. With user-friendly features and robust safety
                measures, we ensure a smooth and secure donation process. Moreover, by joining our platform, users
                become part of a larger movement dedicated to making a tangible difference in their communities. Choose
                us for an empowering experience that transforms the act of giving into a powerful force for good.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ======= Events Section ======= -->
    <section id="campaigns" class="events" style="background-image: url('{{ asset('assets/images/homepage/Untitled design (39).jpg') }}');">
      <div class="container-fluid" data-aos="fade-up">
          <h1 class="headings">Campaigns<span>Lowest donated campaigns</span></h1>
  
          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                @foreach($campaigns as $campaign)
                @php
                    $imagePath = $campaign->image ? asset('storage/' . $campaign->image) : asset('images/logo.png');
                @endphp
                <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                    style="background-image: url('{{ $imagePath }}')">
                    <h3>{{ $campaign->campaign_name }}</h3>
                    <div class="price align-self-start">Donated Amount: ${{ $campaign->donated_amount }}</div>
                    <p class="description">{{ $campaign->description }}</p>
                    <p class="description">Number of meals: {{ $campaign->number_of_meals }}</p>
                </div><!-- End Event item -->
            @endforeach
            
              </div>
              <div class="swiper-pagination"></div>
          </div>
      </div>
  </section><!-- End Events Section -->
  
  
  

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">
          <h1 class="headings">Chefs<span>Professional Chefs</span></h1>
  
          <div class="row gy-5">
              @foreach($topChefs as $chef)
              <div class="card-hover">
                  <div class="card-hover__content">
                      <h3 class="card-hover__title">
                          {{ $chef->name }}  {{$chef->lastName}}<!-- Assuming 'name' is the chef's name column -->
                      </h3>
                      <p class="description">{{ $chef->username }}</p>

                      
                      <a href="/chefs/{{ $chef->id }}" class="card-hover__link">
                          <span>Learn More</span>
                          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                          </svg>
                      </a>
                  </div>
                  @php
                  $user = Auth::user();
                  $imageSrc = asset('storage/avatars/' . $chef->image);
                  @endphp
                  <img src="{{ $imageSrc }}" alt="User Avatar">
                  
                 
              </div>
              @endforeach
          </div>
  
      </div>
  </section><!-- End Chefs Section -->
  
  


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg"
      style="background-image: url({{asset('assets/images/homepage/Untitled\ design\ \(39\).jpg')}});">
      <div class="container" data-aos="fade-up">
        <h1 class="headings">gallery<span>check our gallery</span></h1>


        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-1.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-1.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-2.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-2.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-3.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-3.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-4.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-4.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-5.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-5.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-6.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-6.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-7.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-7.jpg')}}" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="{{asset('assets/img/gallery/gallery-8.jpg')}}"><img src="{{asset('assets/img/gallery/gallery-8.jpg')}}" class="img-fluid"
                  alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <h1 class="headings">Contact Us<span>Need help?</span></h1>


       
        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>10120458@mu.edu.lb</p>
                <p>10121836@mu.edu.lb</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+961 81998587</p>
                <p>+961 76878216</p>
              </div>
            </div>
          </div><!-- End Info Item -->
        </div>
      </div>
    </section><!-- End Contact Section -->
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h1 class="headings">messages <span>give your feedback</span></h1>
        </div>

        <div class="row">
          <div class="image">
            <img class="reserves-img" src="{{asset('assets/img/form.jpg')}}" alt="">
          </div>
          <div class="content-msg">
            <div class="col-lg-8 d-flex  align-items-center reservation-form-bg">
              <form action="{{ route('feedback.store') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                @csrf
                
                <div class="rows gy-4">
                    <div class="col-lg-4 col-md-6">
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                        <div class="validate"></div>
                    </div>
                </div>
            
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your feedback was sent. Thank you!</div>
                </div>
                <button type="submit">Submit Feedback</button>

            </form>
            
            
            
            </div><!-- End Reservation Form -->
          </div>
        </div>
      </div>
    </section><!-- End Book A Table Section -->

  </main><!-- End #main -->
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





  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/nav.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/yummy/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/yummy/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/yummy/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/yummy/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/yummy/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/yummy/assets/js/main.js')}}"></script>


</body>

</html>