<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 How To Integrate Stripe Payment Gateway</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class='row'>
            <h1>Laravel 10 How To Integrate Stripe Payment Gateway</h1>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                    Laravel 10 How To Integrate Stripe Payment Gateway
                    </div>
                    <div class="card-body">
                    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Dish</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{ $id }}">
                                <td class="words">
                                    <img src="{{$details['image'] ? asset('storage/' . $details['image']) : asset('/images/logo.png')}}" alt="" class="menu-image">
                                    <p class="m-0 d-inline-block align-middle font-16">
                                        <a href="ecommerce-product-detail.html" class="text-reset font-family-secondary">{{ $details['name'] }}</a>
                                        <br>
                                        <small class="me-2">{{ $details['price'] }} </small>
                                    </p>
                                </td>
                               <td>
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                            </td>
                               <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total ${{ $total }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="/session" method="POST">
                                    <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type='hidden' name="total" value="{{ $total }}">
                                    <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                </form>
                                
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>