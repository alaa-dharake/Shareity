<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/CSC499/assets/images/homepage/logo.png">

     <!-- Icons Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link rel="stylesheet" href="{{asset('assets\css\cooks.css')}}">
     <link rel="stylesheet" href="{{asset('assets\css\dropdown.css')}}">
     <link rel="stylesheet" href="{{asset('assets\css\navbar1.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/css/right-cart.css') }}"> 
     <link rel="stylesheet" href="{{asset('assets\css\footer.css')}}">
    <title>Shareity</title>
</head>
<body>
  <!-- ======= Header ======= -->
  <x-header/>

  
    <main id="sorted">
    <main id="list-section">
        <div class="dropdown1 toggle">
            <input id="t1" type="checkbox">
            <label for="t1">Region</label>
            <ul>
                <li><a href="#">All regions</a></li>
                @foreach($states as $state)
                <li>
                    <a href="{{ url('view-state/'.$state->name) }}">
                        {{$state->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        
    </main>
    </main>
   
    @foreach($users as $chef)
    @php
    // Check if the chef has any dishes
    $chefDishes = $dishes->where('user_id', $chef->id);
    // Calculate the average rating as a float
    $averageRating = $chef->average_rating ? (float) $chef->average_rating : null;
    // Format the average rating for display
    $averageRatingDisplay = $chef->average_rating ? number_format($chef->average_rating, 1) : 'No ratings';
@endphp
    @if($chef->role == "chef" && $chefDishes->count() > 0)
        <section class="lists">
            <div id="login-container">
                @php
                    $imageSrc = asset('storage/avatars/' . $chef->image); // Assuming image is stored in 'storage/app/public/avatars/'
                @endphp
                <a href="Cooks-details.html">
                    <img class="profile-img" src="{{ $imageSrc }}" alt="Chef Avatar">
                </a>
                <h1>{{ $chef->username }}</h1>
                <div>
                  <div class="contents">
                    <div class="description">{{ $chef->state->name }}</div>
                    <div class="rating">
                        @php
                            $fullStars = floor($averageRating);
                            $halfStar = $averageRating && ($averageRating - $fullStars) >= 0.5;
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $fullStars)
                                <i class="fa fa-star"></i>
                            @elseif ($i == $fullStars + 1 && $halfStar)
                                <i class="fa fa-star-half-o"></i>
                            @else
                                <i class="fa fa-star-o"></i>
                            @endif
                        @endfor
                        <div class="reviews">{{ $averageRatingDisplay }} reviews</div>
                    </div>
                </div>
                    <div class="uk-width-expand1">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class="uk-text-muted">{{ $chef->city->name }}</span>
                    </div>
                </div>

                <div class="content">
                    <div class="container">
                        <div class="screen-togo">
                            <ul class="menu-items">
                                <!-- Menu Item 1 -->
                                @foreach($chefDishes->take(3) as $dish)
                                    <li class="menu-item">
                                        <img src="{{ $dish->image ? asset('storage/' . $dish->image) : asset('/images/logo.png') }}" alt="" class="menu-image">
                                        <div class="menu-item-dets">
                                            <p class="menu-item-heading">{{ $dish->name }}</p>
                                            <p class="g-price">{{ $dish->price }}</p>
                                            <div class="detail">
                                                <i class="mdi mdi-cart-plus"></i>
                                                <i class="mdi mdi-eye"></i>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->

                <div class="btn-container">
                    <a class="btn-content" href="/chefs/{{ $chef->id }}">
                        <span class="btn-title">VIEW MORE</span>
                        <span class="icon-arrow">
                            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986863,4.09820839 0.148075598,3.90117456 C0.150162623,3.89904911 0.152268555,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>

            </div> <!-- login-container -->
        </section> <!-- lists -->
    @endif
@endforeach


{{-- <div class="pagination-links">
  {{ $users->links() }}
</div> --}}

    
      <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container-footer">
      <div class="row-footer">
        <div class="footer-cols">
          <img src="assets/images/homepage/logo.png" height="200px" width="200px" style="background-color: white;border-radius: 600px;">
          
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

    <!-- <section class="lists">
        <div id="login-container">
            <img class="profile-img" src="assets/images/homepage/png-clipart-creative-chef-cartoon-character-s-chef-cartoon-characters.png">
            <h1>Cook 01</h1>
            <div>
            <div class="contents">
                <div class="description">Zahle street 01</div>
                <div class="rating">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-half-o"></i>
                <div class="reviews">4.5 reviews</div>
            </div>
            </div>
            <div class="uk-width-expand1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span class="uk-text-muted">37.77 Km from you</span>
             </div>
        </div>
 
    <section class="articles">
        <article>
          <div class="article-wrapper">
            <figure>
              <img src="assets/images/meals/pizzaphoto.jpeg" alt="" />
            </figure>
            <div class="article-body">
              <h3>This is some title</h3>
              <div class="uk-width-auto@s uk-text-small">
                <img class="img1" src="assets/images/homepage/output-onlinetools.png">
                <span class="uk-text-muted uk-muted1">$ 12</span>
              </div>
            </div>
          </div>
        </article>
        <article>
            <div class="article-wrapper">
              <figure>
                <img src="assets/images/meals/burger-meal.webp" alt="" />
              </figure>
              <div class="article-body">
                <h3>This is some title</h3>
                <div class="uk-width-auto@s uk-text-small">
                  <img class="img1" src="assets/images/homepage/output-onlinetools.png">
                  <span class="uk-text-muted uk-muted1">$ 12</span>
                </div>
              </div>
            </div>
          </article>
      
          <article>
            <div class="article-wrapper">
              <figure>
                <img src="assets/images/meals/chicken-meal.jpeg" alt="" />
              </figure>
              <div class="article-body">
                <h3>This is some title</h3>
                <div class="uk-width-auto@s uk-text-small">
                  <img class="img1" src="assets/images/homepage/output-onlinetools.png">
                  <span class="uk-text-muted uk-muted1">$ 12</span>
                </div>
              </div>
            </div>
          </article>
          <article>
            <div class="article-wrapper">
              <figure>
                <img src="assets/images/meals/seafood-meal.jpg" alt="" />
              </figure>
              <div class="article-body">
                <h3>This is some title</h3>
                <div class="uk-width-auto@s uk-text-small">
                  <img class="img1" src="assets/images/homepage/output-onlinetools.png">
                  <span class="uk-text-muted uk-muted1">$ 12</span>
                </div>
              </div>
            </div>
          </article>
          <div class="btn-conteiner">
            <a class="btn-content" href="Cooks-details.html">
              <span class="btn-title">VIEW MORE</span>
              <span class="icon-arrow">
                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                  </g>
                </svg>
              </span> 
            </a>
          </div>
      </section>
    </section> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets/js/dropdown.js')}}"></script>
    <script src="assets/js/nav.js"></script>

    <script src="assets/js/nav.js"></script>
   <script src="{{asset('assets\js\vendor\mainsss.js')}}"></script>




</body>
</html>
