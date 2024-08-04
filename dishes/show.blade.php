<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipe | Cooking Recipe HTML Template</title>
  <link rel="shortcut icon" type="image/x-icon" href="/CSC499/assets/images/homepage/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <link href="https://fontawesome.com/icons/circle-arrow-down-left?f=sharp&s=thin" rel="shortcut icon" />
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/dish-details.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/right-cart.css') }}"> 
  <link rel="stylesheet" href="{{asset('assets/css/dishes2.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/navbar1.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body style="background-image: url({{asset('assets/images/details-background.jpg')}}); position:relative; top:-31px">
  <!-- ======= Header ======= -->
  <x-header />
  <section>
    <!-- Content goes here -->
  </section>

  <div class="uk-container">
    <div data-uk-grid>
      <div class="uk-width-1-2@s">
        <div><img class="icon" src="{{ $dish->image ? asset('storage/' . $dish->image) : asset('/images/logo.png') }}" alt="Image-HasTech"></div>
      </div>
      <div class="uk-width-expand@s uk-flex uk-flex-middle">
        <div>
          <h1 class="tittle">{{ $dish->name }}</h1>
          <ul>
            @foreach ($dish->ingredients as $ingredient)
                <li><i class="fa fa-utensils"></i> {{ $ingredient }}</li> 
            @endforeach
        </ul>
        
          <hr>
          <div class="uk-section uk-section-default">
            <div class="uk-grid-small">
              <div class="uk-center">
                @php
                $imageSrc = asset('storage/avatars/' . $dish->user->image);
            @endphp
            <img src="{{ $imageSrc }}" alt="User Avatar" class="circle-image">
            
            
                <div class="uk-width-expand1">
                  <div class="uk-width-auto@s uk-text-small">
                    <p class="uk-margin-small-top uk-margin-remove-bottom">Created by <a class="chef_link" href="#">{{ $chef->username }}</a></p>
                    <div class="uk-width-expand1">
                
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span class="uk-text-muted">{{ $dish->user->state->name }}</span>
                    </div>
                  </div>
                  <div class="uk-width-expand1">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span class="uk-text-muted">{{ $dish->user->city->name }}</span>
                  </div>
                </div>
                <hr>
                <div class="uk-margin-medium-top uk-child-width-expand uk-text-center uk-grid-divider" data-uk-grid>
                  <div>
                    <span data-uk-icon="icon: future; ratio: 1.4"></span>
                    <h5 class="uk-text-500 uk-margin-small-top uk-margin-remove-bottom">Start Time</h5>
                    <span class="uk-text-small">{{ $dish->startTime }}</span>
                  </div>
                  <div>
                    <span data-uk-icon="icon: clock; ratio: 1.4"></span>
                    <h5 class="uk-text-500 uk-margin-small-top uk-margin-remove-bottom">End Time</h5>
                    <span class="uk-text-small">{{ $dish->endTime }}</span>
                  </div>
                  <div>
                    <span data-uk-icon="icon: users; ratio: 1.4"></span>
                    <h5 class="uk-text-500 uk-margin-small-top uk-margin-remove-bottom">Quantity</h5>
                    <span class="uk-text-small">Serves {{ $dish->quantity }}</span>
                  </div>
                </div>
                <hr>
                <div data-uk-grid>
                  {{-- <div class="uk-width-expand@s uk-flex uk-flex-middle uk-flex-right@s">
                    <a href="#" class="uk-icon-link" data-uk-icon="icon: plus-circle; ratio: 1.2" data-uk-tooltip="title: Save Recipe"></a>
                    <a href="#" class="uk-icon-link uk-margin-left" data-uk-icon="icon: cart; ratio: 1.2" data-uk-tooltip="title: Shopping List"></a>
                    <a href="#" class="uk-icon-link uk-margin-left" data-uk-icon="icon: print; ratio: 1.2" data-uk-tooltip="title: Print Recipe"></a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <form action="{{ route('cart.add', $dish->id) }}" method="POST">
      @csrf
      <div class="textss"><i class="fas fa-shopping-cart"></i>Buy Now</div>
  
  </form>
    <div class="uk-width-auto@s uk-text-small">
      <img class="img1" src="{{ $dish->image ? asset('storage/' . $dish->image) : asset('/images/logo.png') }}">
      <span class="uk-text-muted uk-muted1">$ {{ $dish->price }}</span>
 
    </div>
    <hr>
    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-flex-right@s">
      <div class="section-header">
        <h1 class="headings">Meals <span>Related Similar</span></h1>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="screen-togo">
          <ul class="menu-itemss">
            <!-- Menu Item 1 -->
            @php
            use Carbon\Carbon;
            @endphp

            @foreach ($similarDishes as $index => $similarDish)
            
            @php
            $endTime = Carbon::parse($similarDish->endTime); // Parse endTime as Carbon instance
            $day = Carbon::parse($similarDish->day); // Parse day as Carbon instance
        @endphp
      
                  @if ($index < 5)
                    <li class="menu-item">
                        <img src="{{ $similarDish->image ? asset('storage/' . $similarDish->image) : asset('/images/logo.png') }}" alt="" class="menu-image">
                        <div class="menu-item-dets">
                            <p class="menu-item-heading">{{ $similarDish->name }}</p>
                            <p class="cook">BY: {{ $similarDish->chef->username }}</p>
                            <div class="detail">
                                <div data-tooltip="$20" class="buttonss">
                                    <div class="buttonss-wrapper">
                                        <div class="textss">Buy Now</div>
                                        <span class="iconss">
                                            <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
            
            @endif
        @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/js/dish-details.js') }}"></script>
</body>

</html>