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
                                      <img src="{{ asset('assets/images/meals/plate__french-fries.webp') }}" alt="" class="menu-image">
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
