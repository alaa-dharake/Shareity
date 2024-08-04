<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>User-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo (1).png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<style>
    ul.topbar-menu.d-flex.align-items-center {
        position: relative;
        left: 427px;
    }
</style>

<body>

    <!-- Begin page -->
    <div id="wrapper">
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

        <!-- ========== Menu ========== -->
        <x-chef-header />

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">

            <!-- ========== Topbar End ========== -->

            <div class="content" style="background-image: url('/assets/images/Untitled design (38).jpg');">


                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="position: relative;top: 12px;background: transparent;">
                                <div class="card-body">
                                    <div class="row justify-content-between mb-2">
                                        <div class="col-auto">
                                            <form class="search-bar position-relative mb-sm-0 mb-2">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="mdi mdi-magnify"></span>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>User</th>
                                                    <th>Dish</th>
                                                    <th>Transaction Id</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                <tr>
                                                    <td>{{ $order->user->name }}</td>
                                                    <td>{{ $order->dish->name }}</td>
                                                    <td>{{ $order->transaction_id }}</td>
                                                    <td>{{ number_format($order->amount, 2) }} $</td>
                                                    <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                                                    <td>
                                                        <p class="action-icon" onclick="confirmDelete('{{ route('orders.destroy', $order) }}')"><i class="mdi mdi-delete"></i></p>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </div> <!-- content-page -->
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    </div> <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this order?')) {
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    return response.json().then(data => {
                        if (response.ok) {
                            toastr.success(data.message || 'Order deleted successfully');
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            toastr.error(data.message || 'Failed to delete the order');
                        }
                    });
                }).catch(error => {
                    toastr.error('An error occurred');
                });
            }
        }
    </script>

</body>

</html>
