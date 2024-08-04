<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>Edit Campaign</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/homepage/logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Theme Config Js -->
    <script src="{{asset('Cook-profile/assets/js/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('Cook-profile/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{asset('Cook-profile/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('Cook-profile/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/add-dish.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Menu ========== -->
        <div class="app-menu">
            <div class="logo-box">
                <a href="index.html" class="logo-light">
                    <img src="{{asset('assets/images/logo_1-removebg-preview.png')}}" alt="logo" class="logo-lg">
                    <h1>Shareity</h1>
                </a>
            </div>
            <div class="scrollbar">
                <ul class="menu">
                    <li class="menu-title">Navigation</li>
                    <li class="menu-item">
                        <a class="menu-link" href="index.html">
                            <span class="menu-icon"><i class="mdi mdi-account-box"></i></span>
                            <span class="menu-text"> Edit Profile</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dishes.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-silverware"></i></span>
                            <span class="menu-text"> Dishes </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="campaigns.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-account-circle"></i> </span>
                            <span class="menu-text"> Campaigns </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Reviews.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-message-draw"></i> </span>
                            <span class="menu-text"> Reviews </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="order-details.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-cart-plus"></i> </span>
                            <span class="menu-text"> Orders </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-chat.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-message-text-outline"></i> </span>
                            <span class="menu-text"> Messages </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Security.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                            <span class="menu-text"> Security </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/CSC499/Cooks-details.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-account-circle"></i> </span>
                            <span class="menu-text"> My Page </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/CSC499/Home.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i> </span>
                            <span class="menu-text"> Back to Home</span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left menu End ========== -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">
                        <!-- Topbar Brand Logo -->
                        <div class="logo-box">
                            <a href="index.html" class="logo-light">
                                <img src="{{asset('assets/images/logo_1-removebg-preview.png')}}" alt="logo" class="logo-lg">
                                <h1>Shareity</h1>
                            </a>
                        </div>
                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <ul class="topbar-menu d-flex align-items-center">
                            <!-- Topbar Search Form -->
                            <li class="app-search dropdown me-3 d-none d-lg-block">
                                <form>
                                    <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
                                    <span class=" fa fa-search search-icon font-16"></span>
                                </form>
                            </li>
                            <!-- Fullscreen Button -->
                            <li class="d-none d-md-inline-block">
                                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                    <i class="fa fa-window-maximize font-22" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                                    <span class="ms-1 d-none d-md-inline-block">
                                        Geneva <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ========== Topbar End ========== -->
                <div class="content" style="background-image: url(assets/images/Untitled\ design\ \(38\).jpg);">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- chat area -->
                        <div class=" col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body py-2 px-3 border-bottom border-light">
                                    <div class="row justify-content-between py-1">
                                        <div class="col-sm-7">
                                            <div class="container">
                                                <form action="/campaigns/{{ $campaign->id }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="d-flex align-items-start">
                                                        <div class="container">
                                                            <div class="avatar-upload">
                                                                <div class="file">
                                                                    <label for="imageUpload">Click Here To Upload Your Image
                                                                        <i class="mdi mdi-cloud-upload"></i>
                                                                    </label>
                                                                    <input type="file" id="imageUpload" name="image" accept="image/*" onchange="previewImage(event)">
                                                                    @error('image')
                                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                <div>
                                                                    <div id="imagePreview">
                                                                        @if($campaign->image)
                                                                            <img id="uploadedImage" src="{{ asset('path_to_images/'. $campaign->image) }}" class="me-2 rounded-circle">
                                                                        @else
                                                                            <img id="uploadedImage" class="me-2 rounded-circle">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="text" name="campaign_name" value="{{ $campaign->campaign_name }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Campaign Name</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="number" step="0.01" name="donated_amount" value="{{ $campaign->donated_amount }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Donated Amount</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="number" name="number_of_meals" value="{{ $campaign->number_of_meals }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Number of Meals</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="number" step="0.01" name="price_per_meal" value="{{ $campaign->price_per_meal }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Price Per Meal</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="text" name="author" value="{{ $campaign->author }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Author</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="hidden" name="author_id" value="{{ $campaign->author_id }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <textarea name="description" required>{{ $campaign->description }}</textarea>
                                                            <div class="underline"></div>
                                                            <label for="">Description</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="date" name="end_date" value="{{ $campaign->end_date }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">End Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="time" name="start_time" value="{{ $campaign->start_time }}" required>
                                                            <div class="underline"></div>
                                                            <label for="startTimeInput">Start Time</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="time" name="end_time" value="{{ $campaign->end_time }}" required>
                                                            <div class="underline"></div>
                                                            <label for="endTimeInput">End Time</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="text" name="location" value="{{ $campaign->location }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Location</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="text" name="meal_name" value="{{ $campaign->meal_name }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Meal Name</label>
                                                        </div>
                                                    </div>
                                                    <div id="ingredients">
                                                        @if(is_array($campaign->ingredients))
                                                            @foreach($campaign->ingredients as $ingredient)
                                                                <div>
                                                                    <input type="text" name="ingredients[]" value="{{ $ingredient }}" required>
                                                                    <button type="button" onclick="removeIngredientField(this)">Remove</button>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <button type="button" onclick="addIngredientField()">Add Ingredient</button>
                                                    
                                                    <div class="forms">
                                                        <div class="row mt-4">
                                                            <div class="float-start1">
                                                                <a href="campaigns.html" class="btns button-previous">CANCEL</a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="float-start1">
                                                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                                            </div>
                                                            <i class="mdi mdi-content-save"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <!-- end chat area-->
            </div> <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- Vendor js -->
    <script src="{{asset('Cook-profile/assets/js/vendor.min')}}"></script>
    <!-- App js -->
    <script src="{{asset('Cook-profile/assets/js/app.min')}}"></script>
    <script src="{{asset('Cook-profile/assets/js/profile')}}"></script>
    <script>
        function addIngredientField() {
            var container = document.getElementById("ingredients");
            var div = document.createElement("div");
            div.innerHTML = '<input type="text" name="ingredients[]" required> <button type="button" onclick="removeIngredientField(this)">Remove</button>';
            container.appendChild(div);
        }

        function removeIngredientField(button) {
            button.parentNode.remove();
        }
    </script>
</body>

</html>
