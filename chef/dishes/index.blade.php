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
    <script src="{{asset('assets/js/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/order-details.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Menu ========== -->
        <x-chef-header/>
        <!-- ========== Left menu End ========== -->

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
                                    <div class="row mt-4">
                                        <div class="float-start1">
                                            <a type='button' class='btns  button-previous' name='Update' value='edit'
                                                href="/meals/create">ADD MEAL<i
                                                    class="mdi mdi-plus-circle-multiple-outline"></i>
                                            </a>
                                        </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                            <thead class="table-light">
                                                <tr>
													<th>ID</th>
                                                    {{-- <th>Image</th> --}}
                                                    <th>Meal Name</th>
                                                    <th>Category Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Date</th>
                                                    <th>Ingredients</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($dishes->count() > 0)
                                                @foreach($dishes as $dish)
                                                    @if($dish->user_id == $user->id)
                                                        <tr>
                                                            <td>{{ $dish->id }}</td>
                                                            {{-- Uncomment or modify as needed --}}
                                                            {{-- <td>{{ $dish->image }}</td> --}}
                                                            <td>{{ $dish->name }}</td>
                                                            <td>{{ $dish->category->name ?? 'N/A' }}</td>
                                                            <td>{{ $dish->price }}</td>
                                                            <td>{{ $dish->quantity }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($dish->start_time)->format('H:i') }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($dish->end_time)->format('H:i') }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($dish->date)->format('Y-m-d') }}</td>
                                                            <td>{{ implode(', ', $dish->ingredients) }}</td>
                                                            <td class="action">
                                                                <form action="{{ route('dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <a href="{{ route('dishes.edit', $dish->id) }}" class="action-icon">
                                                                        <i class="mdi mdi-pencil" aria-hidden="true"></i>
                                                                    </a>
                                                                </form>
                                                                <form action="{{ route('dishes.destroy', $dish->id) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="action-icon"><i class="mdi mdi-delete"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="10">No dishes found.</td>
                                                </tr>
                                            @endif
                                            
                                            </tbody>
                                        </table>
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
                <script src="{{asset('assets/js/vendor.min.js')}}"></script>

                <!-- App js -->
                <script src="{{asset('assets/js/app.min.js')}}"></script>

                <script src="{{asset('assets/js/profile.js')}}"></script>

</body>

</html>
