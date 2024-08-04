<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/navbar1.css">
    <link rel="stylesheet" href="assets/css/campaigns.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="{{ asset('assets/css/right-cart.css') }}"> 





</head>
<body>
  <!-- ======= Header ======= -->
 <x-header/>
  <main class="site-main">

    
			
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
          <h1 class="headings">donate in<span>Our campaigns</span></h1>
            <!-- Content Area -->
            <div class="col-md-9 col-sm-8 content-area">
              @foreach($campaigns as $campaign)
              <div class="post-container">
                  <div class="type-post">
                      <div class="entry-cover">
                          <a href="blog-single.html">
                              <img src="{{$campaign->image ? asset('storage/' . $campaign->image) : asset('/images/logo.png')}}" alt="" class="campimg">
                          </a>
                      </div>
                      <div class="entry-content">
                          <div class="post-date">
                              <a href="#">
                                  {{ \Carbon\Carbon::parse($campaign->end_date)->format('d') }}
                                  <span>{{ \Carbon\Carbon::parse($campaign->end_date)->format('F') }}</span>
                              </a>
                          </div>
                          <h3 class="entry-title"><a href="blog-single.html" title="Special grill recipe restaurant ready">{{$campaign->campaign_name}}</a></h3>
                          <div class="entry-meta1">
                              <span class="post-date"><i class="mdi mdi-alarm"></i> Posted   <a href="" class="datenb">
                                  {{ \Carbon\Carbon::parse($campaign->created_at)->format('d') }}
                                  <span>{{ \Carbon\Carbon::parse($campaign->created_at)->format('F') }}</span>
                              </a></span>
                              <span><i class="mdi mdi-calendar-clock"></i><div class="post-time">
                                  {{ \Carbon\Carbon::parse($campaign->start_time)->format('h:i A') }}
                                  -
                                  {{ \Carbon\Carbon::parse($campaign->end_time)->format('h:i A') }}
                              </div></span>
                          </div>
                          <p class="meal">Price per Meal: {{$campaign->price_per_meal}}</p>
              
                          <div class="donatedam">
                          <p>Donated Amount: {{$campaign->donated_amount}}$</p>
                          <p class="nbm">Number of Meals: {{$campaign->number_of_meals}}</p>
                          </div>
                          <span class="entry-meta1" ><i class="mdi mdi-google-maps"></i>{{$campaign->location}}</span>
                          <p class="meal">{{$campaign->description}}</p>
                          <p class="meal">{{$campaign->meal_name}}</p>
                          <a href="\donate\{{ $campaign->id }}" title="Read More">Donate Now!</a>
                          
                      </div>
                  </div>
              </div>
              @endforeach
              

            
            </div>
             
            </div>
        </div>     
    </div><!-- Content Area /- -->
</main>
      <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container-footer">
      <div class="row-footer">
        <div class="footer-cols">
          <img src="assets/images/homepage/logo.png" height="150px" width="150px" style="background-color: white;border-radius: 600px;">
          
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


  <!-- Template Javascript -->
  <!-- <script src="js/main.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/js/nav.js"></script>
    
</body>
</html>