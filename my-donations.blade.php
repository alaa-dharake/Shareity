
<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

    <head>
        <meta charset="utf-8" />
        <title>User-Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo (1).png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

        <!-- Theme Config Js -->
        <script src="{{asset('assets/js/head.js')}}"></script>

        <!-- Bootstrap css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Icons css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

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


        <!-- ========== Menu ========== -->
      <x-user-header/>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                
            <!-- ========== Topbar End ========== -->

            <div class="content" style="background-image: url(assets/images/Untitled\ design\ \(54\).jpg);">

                <!-- Start Content-->
                <div class="container-fluid" style="backdrop-filter: blur(5px);">
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
                                                        <th>Campaign</th>
                                                        <th>Amount</th>
                                                        <th>Transaction Id</th>
                                                        <th>Status</th>                                                       
                                                        <th>Date</th>
                                                        <th style="width: 82px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($donations as $donation)
                                                    <tr>
                                                        <td>{{ $donation->campaign->campaign_name }}</td>
                                                        <td>{{ number_format($donation->donation_amount, 2) }} $</td>
                                                        <td>{{ $donation->transaction_id }}</td>
                                                        <td>
                                                            @if($donation->status == 'succeeded')
                                                                <span class="badge bg-success">{{ $donation->status }}</span>
                                                            @else
                                                                <span class="badge bg-danger">{{ $donation->status }}</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $donation->created_at->format('Y-m-d H:i:s') }}</td>
                                                        <td>
                                                            <form action="{{ route('donations.destroy', $donation) }}" method="post">
                                                                {!! csrf_field() !!}
                                                                <!-- Use the method spoofing for DELETE request -->
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit"  class="action-icon"><i class="mdi mdi-delete"></i></button>
                                                            </form>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach

                                                    
                                                </tbody>
                                            </table>
                                        </div>
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

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

    </body>
</html>
