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

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/homepage/logo.png') }}">

    <!-- <link rel="stylesheet" href="assets/css/navbar.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/right-cart.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/navbar1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dishes2.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/price-range1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aos/aos.css') }}">
    <!-- Vendor CSS Files -->
    <!-- <link href="assets/yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ asset('assets/yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/yummy/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/yummy/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <title>Shareity</title>
</head>
<body>

    <!-- ======= Header ======= -->
    <x-header :user="$user" />
    
    <main id="sorted">
      <main id="list-section">
        
      </main>
  </main>
    <!-- Price range slider -->
    <div class="range-slider" style="--min:0; --max:{{ $maxPrice }}; --value:{{ $maxPriceFilter }}; --text-value:'{{ $maxPriceFilter }}';">
      <input type="range" min="0" max="{{ $maxPrice }}" step="1" value="{{ $maxPriceFilter }}"
             oninput="this.parentNode.style.setProperty('--value', this.value);
                      this.parentNode.style.setProperty('--text-value', JSON.stringify(this.value));
                      document.querySelector('input[name=max_price]').value = this.value;
                      document.getElementById('filter-form').submit();">
      <output></output>
      <div class='range-slider__progress'></div>
  </div>
    <form id="filter-form" action="/dishes" method="GET">
        <div class="search-wrapper">
            <div class="input-holder">
                <input type="text" class="search-input" placeholder="Type to search..." name="search"/>
                <button type="submit" class="search-icon"><span></span></button>
            </div>
            <!-- <span class="close" onclick="searchToggle(event);"></span> -->
        </div>
        <input type="hidden" name="min_price" value="{{ $minPrice }}">
        <input type="hidden" name="max_price" value="{{ $maxPrice }}">
    </form>

    <section class="section-space pb-0">
        <div class="container">
            <div class="row g-3 g-sm-6">
                <!-- Start Product Category Item -->
                @foreach($categories as $category)
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <a href="{{ url('view-category/'.$category->name) }}" class="product-category-item">
                        @if($category->image)
                            <img class="meal-img" src="{{ asset('storage/' . $category->image) }}" alt="Category Image" width="100">
                        @else
                            <p>No image available for {{ $category->name }}</p>
                        @endif
                        <h3 class="title">{{ $category->name }}</h3>
                    </a>
                </div>
                @endforeach
                <!-- End Product Category Item -->
            </div>
        </div>
    </section>

    <!-- End Product Category Area Wrapper -->
    
      @include('dishes.dishes')


    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-cols">
                    <img src="{{ asset('assets/images/homepage/logo.png') }}" height="200px" width="200px" style="background-color: white;border-radius: 600px;">
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
    </main>

    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/nav.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/yummy/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/yummy/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/yummy/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/yummy/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/yummy/assets/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/yummy/assets/js/main.js') }}"></script>
<script>
 function sortDishes(option) {
    $.ajax({
        url: '{{ route('dishes.index') }}',
        method: 'GET',
        data: { sort: option },
        success: function(response) {
            $('#sorted').html(response);
        },
        error: function(error) {
            console.error('Error fetching sorted dishes:', error);
    }
  });
}

  $(document).ready(function() {
      $('.dropdown1 a').on('click', function(event) {
          event.preventDefault();
          var sortOption = $(this).data('sort');
          sortDishes(sortOption);
      });
  });
</script>


<script>
    $(document).ready(function () {
        // Immediately toggle the search wrapper to active state
        $('.search-wrapper').addClass('active');
    });

    function searchToggle(evt) {
        var container = $(evt.target).closest('.search-wrapper');
        var inputField = container.find('.search-input');

        if (container.hasClass('active')) {
            if (evt.target.classList.contains('close')) {
                // Clear input field
                inputField.val('');
            }

            container.removeClass('active');
        } else {
            container.addClass('active');
        }

        evt.preventDefault(); // Prevent default action
    }
</script>
