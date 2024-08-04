<div class="content">
    <div class="container">
        <div class="screen-togo">
            <ul class="menu-items">
                <!--    Menu Item 1    -->
                <!--== Start Dish Items ==-->
                @foreach ($similarDishes as $similarDish)
                    <li class="menu-item col-6 col-lg-4 col-lg-2 col-xl-2">
                        <img src="{{ $similarDish['image'] ? asset('storage/' . $similarDish['image']) : asset('/images/logo.png') }}" alt="" class="menu-image">
                        <div class="menu-item-dets">
                            <p class="menu-item-heading">{{ $similarDish['name'] }}</p>
                            <p class="cook">BY: Cook 01</p>
                            <div class="detail">
                                <div data-tooltip="{{ $similarDish['price'] }}$" class="buttonss">
                                    <a href="{{ route('add_to_cart', $similarDish['id']) }}">
                                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5
                                        </svg>
                                    </a>
                                </div>
                                <a href="/dishes/{{ $similarDish['id'] }}"><i class="mdi mdi-eye"></i></a>
                            </div>
                        </div>
                    </li>
                @endforeach
                <!--== End Dish Items ==-->
            </ul>

            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                <i class="mdi mdi-cart"></i>
                <sup>{{ count((array) session('cart')) }}</sup>
            </a>

            <div class="dropdown-menu">
                <div class="row total-header-section">
                    @php $total = 0 @endphp
                    @foreach((array) session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                    @endforeach
                    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                        <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
