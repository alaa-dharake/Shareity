<header id="header" class="header fixed-top d-flex align-items-center">
  <img class="imageeee" src="{{ asset('assets/images/homepage/logo.png') }}" />
  <div class="containerv d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
          <h1>Shareity<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
          <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="/dishes">MENU</a></li>
              <li><a href="/chefs">CHEFS</a></li>
              <li><a href="/campaigns">CAMPAIGNS</a></li>
          </ul>
      </nav><!-- .navbar -->

      <div class="mini-cart-icon">
          @auth
          <nav class="-mx-3 flex flex-1 justify-end">
              <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                  <i class="mdi mdi-cart"></i>
                  <sup>{{ count((array) session('cart')) }}</sup>
              </a>

              <!-- Dropdown menu for authenticated users -->
              <div class="dropdown-container">
                <details class="dropdown right">
                    <summary class="avatar">
                        @php
                        $user = Auth::user();
                        $imageSrc = asset('storage/avatars/' . $user->image);
                        @endphp
                        <img src="{{ $imageSrc }}" alt="User Avatar">
                    </summary>
                    <ul>
                        <li>
                            <span class="block bold">{{ $user->name }}</span>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/edit-profile">
                                <span class="material-icons-outlined"><i class="mdi mdi-account-circle"></i> </span> Account
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="material-icons-outlined"><i class="mdi mdi-logout"></i></span> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </details>
            </div><!-- END: Dropdown Container -->
            
          @else
          <nav class="-mx-3 flex flex-1 justify-end">
              <a href="{{ route('login') }}" class="more-btn">Sign In</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="more-btn">Sign Up</a>
              @endif
          </nav>
          @endauth
      </div>

  </div>
</header><!-- End Header -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">x</button>
        </div>
        <div class="table-responsive">
          <table class="table">
              <tbody>
                  @php $total = 0; @endphp
                  @if(session('cart'))
                      @foreach(session('cart') as $id => $details)
                          @php $subtotal = $details['price'] * $details['quantity']; @endphp
                          <tr data-id="{{ $id }}">
                              <td>
                                  <div class="words">
                                     <img src="{{ asset('storage/' . $details['image']) }}" alt="Cart Image" width="50" />
                                      <p class="m-0 d-inline-block align-middle font-16">
                                          <a href="ecommerce-product-detail.html" class="text-reset font-family-secondary">{{ $details['name'] }}</a><br>
                                          <small class="me-2">${{ $details['price'] }}</small>
                                      </p>
                                  </div>
                              </td>
                              <td>
                                  <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                              </td>
                              <td class="text-center">${{ $subtotal }}</td>
                              <td>
                                  <a href="javascript:void(0);" class="action-icon"><i class="mdi mdi-delete"></i></a>
                              </td>
                          </tr>
                          @php $total += $subtotal; @endphp
                      @endforeach
                  @endif
              </tbody>
          </table>
      </div>
      
    </div>


        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>${{ $total }}</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="/cart" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="/checkout" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
           
        </div>

    </div>

<!-- Utilize Cart Menu End -->
