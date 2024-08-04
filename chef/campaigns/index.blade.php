<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>Cook-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/CSC499/assets/images/homepage/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/order-details.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

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
                        <div class="row">
                            <div class="col-12">
                                <div class="row mt-4">
                                    <div class="float-start1">
                                        <a type='button' class='btns  button-previous' name='Update' value='edit'
                                            href="/create-campaign">ADD Campaign<i
                                                class="mdi mdi-plus-circle-multiple-outline"></i>
                                        </a>
                                    </div>
                                </div>
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
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Campaign ID</th>
                                                    <th>Campaign Name</th>
                                                    <th>Donated Amount</th>
                                                    <th>Number of meals</th>
                                                    <th>Price Per Meal</th>
                                                    <th>Author</th>
                                                    <th>Description</th>
                                                    <th>End Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Location</th>
                                                    <th>Meal Name</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $counter = 1; // Initialize the counter
                                            @endphp
                                            
                                            @foreach($campaigns as $campaign)
                                                @if($campaign->author_id == $user->id)
                                                    <tr>
                                                        <td>{{ $counter }}</td> <!-- Use the counter variable instead of the campaign ID -->
                                                        <td>{{ $campaign->campaign_name }}</td>
                                                        <td>{{ $campaign->donated_amount }}</td>
                                                        <td>{{ $campaign->number_of_meals }}</td>
                                                        <td>{{ $campaign->price_per_meal }}</td>
                                                        <td>{{ $campaign->author }}</td>
                                                        <td>{{ $campaign->description }}</td>
                                                        <td>{{ $campaign->end_date }}</td>
                                                        <td>{{ $campaign->start_time }}</td>
                                                        <td>{{ $campaign->end_time }}</td>
                                                        <td>{{ $campaign->location }}</td>
                                                        <td>{{ $campaign->meal_name }}</td>
                                                        <td class="action">
                                                            <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <a href="{{ route('campaigns.edit', $campaign->id) }}" class="action-icon"><i class="mdi mdi-pencil"></i></a>
                                                            </form>
                                                            <form action="{{ route('campaigns.destroy', $campaign) }}" method="post">
                                                                {!! csrf_field() !!}
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="action-icon"><i class="mdi mdi-delete"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $counter++; // Increment the counter
                                                    @endphp
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{-- <div class="pagination-wrapper">
                                            {{ $campaigns->links() }}
                                        </div> --}}
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                    </div> <!-- container -->
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            <!-- Vendor js -->
            <script src="assets/js/vendor.min.js"></script>

            <!-- App js -->
            <script src="assets/js/app.min.js"></script>

            <script src="assets/js/profile.js"></script>

</body>

</html>
