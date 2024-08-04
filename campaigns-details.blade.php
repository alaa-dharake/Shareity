<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/navbar1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/campaigns.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    </head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <img class="imageeee" src="{{asset('assets/images/homepage/logo.png')}}" />
    <div class="containerv d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('assets/img/logo.png')}}" alt=""> -->
        <h1>Shareity<span>.</span></h1>

        <!-- <img class="imageeee" src="{{asset('assets/images/homepage/logo.png')}}" /> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="Home.html">HOME</a></li>
          <li><a href="dishes2.html">DISHES</a></li>
          <li><a href="Cooks.html">COOKS</a></li>
          <li><a href="Donations/Donations/index.html">DONATION</a></li>
          <li><a href="/colorlib-regform-7/colorlib-regform-7/index.html">COOK</a></li>
          <li><a href="#main">Gallery</a></li>

        </ul>
      </nav><!-- .navbar -->

      <div class="dropdown-container">
        <details class="dropdown right">
          <summary class="avatar">
            <img src="{{asset('assets/images/homepage/chef-one.jpg')}}">
          </summary>
          <ul>
            <!-- Optional: user details area w/ gray bg -->
            <li>
              <p>
                <summary class="avatar">
                  <img src="{{asset('assets/images/homepage/chef-one.jpg')}}">
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

      <li class="app-search dropdown me-3 d-none d-lg-block">
        <form>
          <span class=" fa fa-search search-icon font-16"></span>
          <input type="search" class="form-control rounded-pill" placeholder="   Search..." id="top-search">

        </form>
      </li>
    </div>
  </header><!-- End Header -->
  <main class="site-main">
			
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            
            <!-- Content Area -->
            <div class="main-content">
            
                <article class="type-post">
                    <div class="entry-cover"><img src="{{ $campaigns->image ? asset('storage/' . $campaign->image) : asset('/images/logo.png') }}" alt=""></div>
                    <div class="entry-content">
                        <div class="post-date"><a href="#"> 29<span>Aguest</span></a></div>
                        <h3 class="entry-title">{{$campaigns->name}}</h3>
                        <div class="entry-meta">
                            <span class="post-date"><i class="mdi mdi-alarm"></i>Posted <a href="#">May,12</a></span>
                            <span><i class="mdi mdi-calendar-clock"></i>12:00 am- 15:00 am</span>
                            <span><i class="mdi mdi-google-maps"></i>121th Street, Sidney VIC 3000</span>
                        </div>
                        <p>{{$campaigns->description}}</p>
                        <blockquote>
                            <p>They'll have to make the best of things its an uphill climb. Well the first thing you know ol' Jeds a millionaire. Kinfolk said Jed move away from there. Why do we always come here. I guess well never know. Its like a kind of torture to have to watch the show. Come and play.</p>
                        </blockquote>
                    </div>
                    <div class="entry-footer">
                        <span class="tags-links">Tags: 
                            <a href="#" title="Non Veg">Non Veg</a>
                            <a href="#" title="Dinner">Dinner</a>
                            <a href="#" title="Chefs">Chefs</a>
                        </span>
                        <span class="share-this">
                            <a href="#" title="share"><i class="fa fa-share"></i> share</a>
                        </span>
                    </div>
                    <div class="about-author">
                        <div class="author-details">
                            <i><img src="{{asset('assets/images/Campaigns/about-author.jpg')}}" alt="Author" /></i>
                            <p>Believe it or not its just me. It's a beautiful day in this neighborhood beautiful neighbor Would you be mine be mine Its a neighborly day.Believe it or not its just me. It's a beautiful day in this neighborhood beautiful neighbor Would you be mine be mine Its a neighborly day.</p>
                        </div>
                    </div>
                </article>
                
                <!-- Comment Area -->
                <div id="comments" class="comments-area">
                    <h2 class="comments-title">Comments</h2>
                    <ol class="comment-list">
                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
                            <div class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img alt="img" src="{{asset('assets/images/Campaigns/comment1.jpg')}}" class="avatar avatar-72 photo"/>
                                        <b class="fn">Aston Martin</b>	
                                    </div>
                                    <div class="comment-metadata"><a href="#">18 May 2016</a></div>
                                </footer>
                                <div class="comment-content">
                                    <p>Believe it or not its just me. It's a beautiful day in this neighborhood beautiful neighbor Would you be mine be mine Its a neighborly day.</p>
                                </div>
                                <div class="reply">
                                    <a class="likes" href="#">10 Likes</a>
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                </div>
                            </div>
                        </li>
                        <li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
                            <div class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img alt="img" src="{{asset('assets/images/Campaigns/comment1.jpg')}}" class="avatar avatar-72 photo"/>
                                        <b class="fn">Aston Martin</b>	
                                    </div>
                                    <div class="comment-metadata"><a href="#">18 May 2016</a></div>
                                </footer>
                                <div class="comment-content">
                                    <p>Believe it or not its just me. It's a beautiful day in this neighborhood beautiful neighbor Would you be mine be mine Its a neighborly day.</p>
                                </div>
                                <div class="reply">
                                    <a class="likes" href="#">10 Likes</a>
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                </div>
                            </div>
                        </li>
                        <li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
                            <div class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img alt="img" src="{{asset('assets/images/Campaigns/comment1.jpg')}}" class="avatar avatar-72 photo"/>
                                        <b class="fn">Aston Martin</b>	
                                    </div>
                                    <div class="comment-metadata"><a href="#">18 May 2016</a></div>
                                </footer>
                                <div class="comment-content">
                                    <p>Believe it or not its just me. It's a beautiful day in this neighborhood beautiful neighbor Would you be mine be mine Its a neighborly day.</p>
                                </div>
                                <div class="reply">
                                    <a class="likes" href="#">10 Likes</a>
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                </div>
                            </div>
                        </li>
                    </ol><!-- .comment-list -->
                    
                    <!-- Comment Form -->
                    <div id="respond" class="comment-respond">
                        <h2 id="reply-title" class="comment-reply-title">Post a Comment</h2>
                        <form method="post" id="commentform" class="comment-form">
                            <p class="comment-form-comment">
                                <textarea id="comment" name="comment" rows="8" placeholder="Write your comment here" required="required"></textarea>
                            </p>
                            <p class="comment-form-author">
                                <input id="author" name="author" placeholder="Your full name" size="30" maxlength="245" required="required" type="text"/>
                            </p>
                            <p class="comment-form-email">
                                <input id="email" name="email" placeholder="Email address" required="required" type="email"/>
                            </p>
                            <p class="form-submit">
                                <input name="submit" class="submit" value="Submit" type="Submit"/>
                            </p>
                        </form>
                    </div><!-- Comment Form /- -->
                    
                </div><!-- Comment Area -->
                
            </div><!-- Content Area /- -->
            
            <!-- Widget Area -->
            <div class="sidebar">
                <!-- Widget: Recent Posts -->
                <aside class="widget widget_recentposts">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="recent-content">
                        <a href="blog-single.html" title="Recent Posts"><i><img src="{{asset('assets/images/Campaigns/rcnt1.jpg')}}" class="wp-post-image" alt="blog-1"></i></a>
                        <h5><a title="Grill chicken represent dhilsya" href="blog-single.html">Grill chicken represent dhilsya</a></h5>
                        <span><a href="#">May 16, 2016</a></span>
                    </div>
                    <div class="recent-content">
                        <a href="blog-single.html" title="Recent Posts"><i><img src="{{asset('assets/images/Campaigns/rcnt1.jpg')}}" class="wp-post-image" alt="blog-1"></i></a>
                        <h5><a title="Special restaurant with nonveg porn" href="blog-single.html">Special restaurant with nonveg porn</a></h5>
                        <span><a href="#">June 09, 2016 </a></span>
                    </div>
                    <div class="recent-content">
                        <a href="blog-single.html" title="Recent Posts"><i><img src="{{asset('assets/images/Campaigns/rcnt1.jpg')}}" class="wp-post-image" alt="blog-1"></i></a>
                        <h5><a title="fishfried Chicken Qualit anjascan food" href="blog-single.html">fishfried Chicken Qualit anjascan food</a></h5>
                        <span><a href="#">April  22, 2016</a></span>
                    </div>
                </aside><!-- Widget: Recent Posts /- -->
                
                <!-- Widget: Calendar -->
                <!-- <aside class="widget widget_calendar">
                    
<div class="container-c">
    <div class="card">
      <div class="frame">
        <div class="stars"></div>
        <div class="stars2"></div>
        <div class="stars3"></div>
        <div class="cloud cloud_top cloud_slow"></div>
        <div class="cloud cloud_bottom cloud_fast"></div>
        <div class="moon"></div>
        <div class="tree tree_dark-green tree_middle"></div>
        <div class="mountain mountain_dark mountain_top"></div>
        <div class="tree tree_dark-green tree_right">    </div>
        <div class="mountain mountain_light mountain_right"></div>
        <div class="tree tree_light-green tree_left"></div>
        <div class="mountain mountain_light mountain_left"></div>
      </div>
    </div>
    <div class="calendar">
      <div class="header">
        <h1 class="header_title">November</h1>
        <p class="header_subtitle">2022</p>
      </div>
      <div class="days-of-week">
        <p class="day-name">Sun</p>
        <p class="day-name">Mon</p>
        <p class="day-name">Tue</p>
        <p class="day-name">Wed</p>
        <p class="day-name">Thu</p>
        <p class="day-name">Fri</p>
        <p class="day-name">Sat</p>
      </div>
      <div class="days">
        <p class="day-number day-number_disabled">30</p>
        <p class="day-number day-number_disabled">31</p>
        <p class="day-number">1</p>
        <p class="day-number">2</p>
        <p class="day-number">3</p>
        <p class="day-number">4</p>
        <p class="day-number">5</p>
        <p class="day-number">6</p>
        <p class="day-number">7</p>
        <p class="day-number">8</p>
        <p class="day-number">9</p>
        <p class="day-number">10</p>
        <p class="day-number">11</p>
        <p class="day-number">12</p>
        <p class="day-number">13</p>
        <p class="day-number">14</p>
        <p class="day-number">15</p>
        <p class="day-number">16</p>
        <p class="day-number">17</p>
        <p class="day-number">18</p>
        <p class="day-number">19</p>
        <p class="day-number">20</p>
        <p class="day-number">21</p>
        <p class="day-number">22</p>
        <p class="day-number">23</p>
        <p class="day-number">24</p>
        <p class="day-number">25</p>
        <p class="day-number">26</p>
        <p class="day-number">27</p>
        <p class="day-number">28</p>
        <p class="day-number">29</p>
        <p class="day-number">30</p>
        <p class="day-number day-number_disabled">1</p>
        <p class="day-number day-number_disabled">2</p>
        <p class="day-number day-number_disabled">3</p>
      </div>
    </div>
  </div> -->
                </aside><!-- Widget: Calendar /- -->
                

                
            </div><!-- Widget Area /- -->
            
        </div><!-- Row -->
    </div><!-- Container -->

</main>
    
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



  <!-- Template Javascript -->
  <!-- <script src="js/main.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{{asset('assets/js/nav.js')}}"></script>

</body>
</html>
