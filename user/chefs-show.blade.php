<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link href="https://fontawesome.com/icons/circle-arrow-down-left?f=sharp&s=thin" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="{{ asset('/Profile/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/homepage/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/navbar1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cooks-details.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cooks-contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/right-cart.css') }}"> 
    

    <title>Shareity</title>
</head>
<body>

<body>

  <!-- ======= Header ======= -->
  <div class="modal fade" id="requestMealModal" tabindex="-1" role="dialog" aria-labelledby="requestMealModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="requestMealModalLabel">Request Your Meal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('meal-requests.store') }}" method="POST">
            @csrf
            <input type="hidden" name="chef_id" value="{{ $chef->id }}">
            <div class="form-group">
              <label for="meal_name">Meal Name</label>
              <input type="text" class="form-control" id="meal_name" name="meal_name" required>
            </div>
            <div class="form-group">
              <label for="requested_date">Requested Date</label>
              <input type="date" class="form-control" id="requested_date" name="requested_date" required>
            </div>
            <div class="form-group">
              <label for="requested_time">Requested Time</label>
              <input type="time" class="form-control" id="requested_time" name="requested_time" required>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn" style="background-color: #f5700a; color: white;">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="requestCampaignModal" tabindex="-1" role="dialog" aria-labelledby="requestMealModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="requestCampaignModalLabel">Request Your Campaign</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('campaign-requests.store') }}" method="POST">
            @csrf
            <input type="hidden" name="chef_id" value="{{ $chef->id }}">
            <div class="form-group">
              <label for="campaign_name">Campaign Name</label>
              <input type="text" class="form-control" id="campaign_name" name="campaign_name" required>
            </div>
            <div class="form-group">
              <label for="campaign_description">Campaign Description</label>
              <input type="text" class="form-control" id="campaign_description" name="campaign_description" required>
            </div>
            <div class="form-group">
              <label for="campaign_meal">Campaign Meal</label>
              <input type="text" class="form-control" id="campaign_meal" name="campaign_meal" required>
            </div>
            <div class="form-group">
              <label for="campaign_date">Campaign Date</label>
              <input type="date" class="form-control" id="campaign_date" name="campaign_date" required>
            </div>
            <div class="form-group">
              <label for="campaign_startTime">Campaign Start Time</label>
              <input type="time" class="form-control" id="campaign_startTime" name="campaign_startTime" required>
            </div>
            <div class="form-group">
              <label for="campaign_endTime">Campaign End Time</label>
              <input type="time" class="form-control" id="campaign_endTime" name="campaign_endTime" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn" style="background-color: #f5700a; color: white;">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <section class="lists" style="background-image:url({{asset('assets/images/Untitled\ design\ \(61\).jpg)')}}">
    <div id="login-container">
        @php
           $imageSrc = asset('storage/avatars/' . $chef->image); // Assuming image is stored in 'storage/app/public/avatars/'
        @endphp
         <img class="profile-img" src="{{ $imageSrc }}" alt="Chef Avatar">
                

      <h1><span>Welcome I'm</span> {{$chef->username}} <span>!</span><i class="mdi mdi-human-greeting"></i></h1>
      <div>
      <div class="mycont">
        <div class="contents" >
          <p>My Location:</p>
          <div class="description"><i class="mdi mdi-map-marker-radius">{{$chef->state->name}}</i></div>
          <div class="description"><i class="mdi mdi-map-marker-radius">{{$chef->city->name}}</i></div>
          
        </div>
        <div class="contents1">
          <p>My Rating:</p>
          <div class="rating">
              @php
                  $fullStars = floor($averageRating); // Full stars count
                  $halfStar = ceil($averageRating) > $fullStars; // Check if there's a half star
              @endphp
      
              @for ($i = 1; $i <= 5; $i++)
                  @if ($i <= $fullStars)
                      <i class="fa fa-star"></i> {{-- Full star --}}
                  @elseif ($halfStar)
                      <i class="fa fa-star-half-o"></i> {{-- Half star --}}
                      @php $halfStar = false; @endphp {{-- Only one half star --}}
                  @else
                      <i class="fa fa-star-o"></i> {{-- Empty star --}}
                  @endif
              @endfor
          </div>
      </div>
      
      <div class="contents2">
        <p>Request Your Own Campaign:</p>
        <div class="btn-conteiner1">
          <a class="btn-content" href="#" data-toggle="modal" data-target="#requestCampaignModal">Request Now
            <span class="icon-arrow">
              <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path id="arrow-icon-one"
                    d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                    fill="#FFFFFF"></path>
                  <path id="arrow-icon-two"
                    d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                    fill="#FFFFFF"></path>
                  <path id="arrow-icon-three"
                    d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                    fill="#FFFFFF"></path>
                </g>
              </svg>
            </span>
          </a>
        </div>
      </div>
      <div class="contents22">
        <p>Request Your Own Meal:</p>
        <div class="btn-conteiner1">
          <a class="btn-content" href="#" data-toggle="modal" data-target="#requestCampaignModal">Request Now
            <span class="icon-arrow">
              <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path id="arrow-icon-one"
                    d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                    fill="#FFFFFF"></path>
                  <path id="arrow-icon-two"
                    d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                    fill="#FFFFFF"></path>
                  <path id="arrow-icon-three"
                    d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                    fill="#FFFFFF"></path>
                </g>
              </svg>
            </span>
          </a>
        </div>
      </div>
      
        <div class="contents3" >
          <p>Contact Me:</p>
          <div class="btn-conteiner1">
            <a class="btn-content" href="/chatify/{{$chef->id}}">Chat Now
              <span class="icon-arrow">
                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one"
                      d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                      fill="#FFFFFF"></path>
                    <path id="arrow-icon-two"
                      d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                      fill="#FFFFFF"></path>
                    <path id="arrow-icon-three"
                      d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                      fill="#FFFFFF"></path>
                  </g>
                </svg>
              </span>
            </a>
          </div>
          
        </div>
      </div>
        <!-- <section>
          <div>
            <h2>Simple CSS check list</h2>
            <ul class="check-list">
              <li>Head</li>
              <li>Shoulders</li>
              <li>Knees</li>
              <li>Toes</li>
            </ul>
          </div>
        </section> -->
      </div>
  </section>

    <!--== End Product Category Area Wrapper ==-->
    <div class="content">
      <div class="container">
          <div class="screen-togo">
              <ul class="menu-items">
                  <!--    Menu Item 1    -->
                  @foreach($dishes as $dish)
                  @if($dish->user_id == $chef->id)
                  <li class="menu-item">
                    <td><img class="menu-img" src="{{ asset('storage/' . $dish->image) }}" alt="{{ $dish->name}}"></td>
                      <div class="menu-item-dets">
                          <p class="menu-item-heading">{{$dish->name}}</p>
                          <p class="g-price">{{$dish->price}}</p>
                          <div class="detail" >
                              <i class="mdi mdi-cart-plus"></i>
                              <i class="mdi mdi-eye"></i>
                          </div>
                      </div>
                      
                  </li>
                  @endif
                  @endforeach
                 
              </ul>
          </div>
          <!-- END EDMO HTML (Happy Coding!)-->
          </main>
      </div> <!-- content -->


  </div>


  <!-- ======= Testimonials Section ======= -->
  {{-- <div class="section-header">
    <h1 class="headings">Reviews<span>And Rating</span></h1>
  </div>
  <section class="container1">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon"></i>
            Has a presence in Lebanon. They work on various projects, including providing emergency food aid and
            implementing sustainable solutions to address long-term food security issues.
          </p>
          <i class="bx bxs-quote-alt-right quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">2020-08-15</span>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
          </div>
          </div>
        </div>
        <div class="slide swiper-slide">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon"></i>
            Has a presence in Lebanon. They work on various projects, including providing emergency food aid and
            implementing sustainable solutions to address long-term food security issues.
          </p>
          <i class="bx bxs-quote-alt-right quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">2020-08-15</span>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
          </div>
          </div>
        </div>
        
      </div>
      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section><!-- End Testimonials Section --> --}}

  
  
      <!-- ======= Book A Table Section ======= -->
      <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h1 class="headings">Rate the Chef<span>Share your experience</span></h1>
        </div>
          <div class="row">
            <div class="image">
              <img class="reserves-img" src="{{asset('assets/img/form.jpg')}}" alt="">
            </div>
            <div class="content-msg">
              <div class="col-lg-8 d-flex  align-items-center reservation-form-bg">
                <form action="{{ route('submit.rating') }}" method="POST">
                  @csrf
                  <input type="hidden" name="user_id" value="{{ Auth::id() }}"> <!-- Assuming you're using Laravel's Auth for user ID -->
                  <input type="hidden" name="chef_id" value="{{ $chef->id }}">
                  <div class="rows gy-4">
                   
                  </div>
  
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="description" rows="5" placeholder="Write a comment"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm
                      your reservation. Thank you!</div>
                  </div>
                  <fieldset class="rating-container">	>
              
                      <input type="radio" name="rating" id="rate1" value="1">
                      <label for="rate1">
                          <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                              <defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs>
                              <path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/>
                              <path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/>
                              <path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/>
                          </svg>
                      </label>
                      <input type="radio" name="rating" id="rate2" value="2">
                      <label for="rate2">
                          <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                              <defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs>
                              <path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/>
                              <path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/>
                              <path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/>
                          </svg>
                </label>
                <input type="radio" name="rating" id="rate3" value="3">
                      <label for="rate3">
                          <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                              <defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs>
                              <path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/>
                              <path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/>
                              <path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/>
                          </svg>
                </label>
                <input type="radio" name="rating" id="rate4" value="4">
                      <label for="rate4">
                          <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                              <defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs>
                              <path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/>
                              <path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/>
                              <path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/>
                          </svg>
                </label>
                <input type="radio" name="rating" id="rate5" value="5">
                      <label for="rate5">
                          <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                              <defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs>
                              <path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/>
                              <path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/>
                              <path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/>
                          </svg>
                </label>
                    <div class="rating-value"></div>
                  </fieldset>
                  <div class="text-center"><button type="submit">Submit</button></div>
                </form>
              </div><!-- End Reservation Form -->
            </div>
          </div>
        </div>
      </section><!-- End Book A Table Section -->
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{asset('assets/js/nav.js')}}"></script>
  <script src="{{asset('assets/js/swiper.js')}}"></script>
  <script src="{{asset('assets/js/vendor/swiper-bundle.min.js')}}"></script>
</body>

</html>
