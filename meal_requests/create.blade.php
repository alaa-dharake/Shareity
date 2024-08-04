<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('style.css')}}">
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

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h1 class="headings">Request a <span>Meal</span></h1>
      </div>
  
      <div class="row">
        <div class="image">
          <img class="reserves-img" src="{{ asset('assets/img/form.jpg') }}" alt="">
        </div>
        <div class="content-msg">
          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form id="meal-request-form" action="{{ route('meal-requests.store') }}" method="POST">
                @csrf
                <input type="hidden" name="chef_id" value="{{ $chef->id }}">
  
              <div class="rows gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="meal_name" class="form-control" id="meal_name" placeholder="Meal Name" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="requested_date" class="form-control" id="requested_date" placeholder="Requested Date" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" name="requested_time" class="form-control" id="requested_time" placeholder="Requested Time" required>
                  <div class="validate"></div>
                </div>
              </div>
              <button type="submit">Submit Meal Request</button>
            </form>
          </div><!-- End Reservation Form -->
        </div>
      </div>
    </div>
  </section><!-- End Book A Table Section -->
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