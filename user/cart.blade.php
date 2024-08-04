<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>User-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo (1).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Theme Config Js -->

    <!-- Bootstrap css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{asset('assets/css/cart.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('../assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Menu ========== -->
        <x-user-header />
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <!-- Toast Notification Container -->
        <div id="toastContainer" aria-live="polite" aria-atomic="true" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="toast-header">
                    <strong class="me-auto">Cart Update</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <!-- Toast body content will be dynamically updated -->
                </div>
            </div>
        </div>
        <div class="content-page">
            <!-- ========== Topbar Start ========== -->
            <!-- ========== Topbar End ========== -->

            <div class="content" style="background-image: url(assets/images/Untitled\ design\ \(54\).jpg);">

                <!-- Start Content-->
                <div class="container-fluid" style="backdrop-filter: blur(5px);">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-nowrap table-centered mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="back">My Orders</th>
                                                            <hr>
                                                    </thead>
                                                    <tbody>
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
                                                            <td class="subtotal" data-th="Subtotal" class="text-center"> {{ $details['price'] * $details['quantity'] }}$</td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="5" style="position: relative;left: 65px;background-color: transparent;">
                                                                <h3><strong> <span class="total">Total:{{ $total }}$</span></strong></h3>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div> <!-- end table-responsive-->
                                            <!-- action buttons-->
                                            <td colspan="5" style="text-align:right;">
                                                <form class="check" action="{{ route('checkout.session') }}" method="POST">
                                                    <a href="/dishes" class="text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-left"></i> Continue Shopping
                                                    </a>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="total" value="{{ $total }}">
                                                    <input type="hidden" name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                                                
                                                    @if(session('cart'))
                                                        @foreach(session('cart') as $id => $details)
                                                            <input type="hidden" name="dish_id[]" value="{{ $id }}">
                                                        @endforeach
                                                    @endif
                                                
                                                    <button type="submit" class="btns"><i class="fa fa-money"></i> Checkout</button>
                                                </form>
                                                
                                                
                                            </td>
                                        </div>
                                        <!-- end col -->
                                    </div> <!-- end row -->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    // Handle the quantity update
    $('.cart_update').on('change', function() {
        var ele = $(this);
        var id = ele.parents('tr').data('id');
        var quantity = ele.val();

        // Check if quantity is less than 1 or not a number
        if (quantity < 1 || isNaN(quantity)) {
            alert('Quantity should be greater than or equal to 1. Setting quantity to 1.');
            quantity = 1; // Set quantity to 1
            ele.val(quantity); // Update input field value
        }

        $.ajax({
            url: '{{ route('cart.update') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: id, 
                quantity: quantity
            },
            success: function(response) {
                if(response.status == 'success') {
                    ele.parents('tr').find('.subtotal').text('$' + response.subtotal);
                    $('.total').text('Total $' + response.total);

                    // Show toast notification
                    var toastBody = 'Cart total updated to $' + response.total;
                    var toastContainer = $('#toastContainer');
                    var toastElement = toastContainer.find('.toast');

                    toastElement.find('.toast-body').html(toastBody);
                    var toast = new bootstrap.Toast(toastElement[0]);
                    toast.show();
                } else {
                    alert(response.message); // Display an error message if any
                }
            }
        });
    });

    // Handle the delete action
    $('.action-icon').on('click', function() {
        var ele = $(this);
        var id = ele.parents('tr').data('id');

        if (confirm("Are you sure you want to remove this item?")) {
            $.ajax({
                url: '{{ route('cart.delete') }}',
                method: "delete",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(response) {
                    if(response.status == 'success') {
                        ele.parents('tr').remove();
                        $('.total').text('Total $' + response.total);

                        // Show toast notification
                        var toastBody = 'Item removed from cart. Cart total updated to $' + response.total;
                        var toastContainer = $('#toastContainer');
                        var toastElement = toastContainer.find('.toast');

                        toastElement.find('.toast-body').html(toastBody);
                        var toast = new bootstrap.Toast(toastElement[0]);
                        toast.show();
                    } else {
                        alert(response.message); // Display an error message if any
                    }
                }
            });
        }
         });
});

</script>

            
        
          <script src="{{asset('assets/js/head.js')}}"></script>

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js"')}}></script>

   </body>
</html>
