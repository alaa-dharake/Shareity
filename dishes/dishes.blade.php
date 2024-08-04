<div class="content">
    <div class="container">
        <div class="screen-togo">
            <ul class="menu-items row">
                @foreach ($dishes as $dish)
                    @php
                        $today = date('Y-m-d');
                        $currentTime = date('Y-m-d H:i:s');
                        $endTime = $dish->endTime; // Assuming endTime is in a format like 'H:i:s'
                    @endphp

                    @if ($dish->day == $today)
                        <div class="col-6 col-lg-4 col-xl-3 mb-4">
                            <li class="menu-item {{ $dish->quantity <= 0 || $endTime < $currentTime ? 'disabled' : '' }}">
                                <img src="{{ $dish->image ? asset('storage/' . $dish->image) : asset('/images/logo.png') }}" alt="" class="menu-image">
                                <div class="menu-item-dets">
                                    <p class="menu-item-heading">{{ $dish->name }}</p>
                                    <p class="cook">BY: {{ $dish->user->username }}</p>
                                    <div class="detail">
                                        <div data-tooltip="{{ $dish->price }}$" class="buttonss">
                                            <div class="buttonss-wrapper">
                                                @if ($dish->quantity > 0 && $endTime > $currentTime)
                                                <form action="{{ route('cart.add', $dish->id) }}" method="POST">
                                                    @csrf
                                                    <div class="textss">Buy Now</div>
                                                    <button type="submit" class="iconss">
                                                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6a.5.5 0 0 1-.485.379H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                           
                                                @elseif ($dish->quantity <= 0)
                                                    <span class="sold-out-label">Sold Out</span>
                                                @elseif ($endTime < $currentTime)
                                                    <span class="unavailable-label">Unavailable</span>
                                                @endif
                                            </div>
                                        </div>
                                        <a href="/dishes/{{ $dish->id }}"><i class="mdi mdi-eye"></i></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    @endif
                @endforeach
            </ul>
            <a href="#ltn_utilize-cart-menu" class="ltn_utilize-toggle">
                <i class="mdi mdi-cart"></i>
                <sup>{{ count(session('cart', [])) }}</sup>
            </a>
            <div class="dropdown-menu">
                <div class="row total-header-section">
                    @php $total = 0 @endphp
                    @foreach(session('cart', []) as $id => $details)
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
