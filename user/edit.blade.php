<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>Edit Dish</title>
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
                                        <s<!DOCTYPE html>
                                            <html lang="en" data-menu-color="brand">
                                            
                                            <head>
                                                <meta charset="utf-8" />
                                                <title>Edit Dish</title>
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
                                                                                            <form action="/dishes/{{ $dish->id }}" method="post" enctype="multipart/form-data">
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
                                                                                                                    @if($dish->image)
                                                                                                                        <img id="uploadedImage" src="{{ asset('path_to_images/' . $dish->image) }}" class="me-2 rounded-circle">
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
                                                                                                        <input type="text" name="name" value="{{ $dish->name }}" required>
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="">Dish Name</label>
                                                                                                    </div>
                                                                                                    <div class="input-data">
                                                                                                        <input type="double" name="price" value="{{ $dish->price }}" required>
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="">Price</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-row">
                                                                                                    <div class="input-data">
                                                                                                        <input type="number" name="quantity" value="{{ $dish->quantity }}" required>
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="">Quantity</label>
                                                                                                    </div>
                                                                                                   
                                                                                                    <div class="input-data">
                                                                                                        <input type="time" required id="endTimeInput"  value="{{ $dish->startTime }}">                                                
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="startTimeInput" id="startTimeLabel" style="display: none;">Start Time</label>
                                                                                                        <input type="time" required id="startTimeInput" style="display:none;"> 
                                                                                                    </div>  
                                                                                                </div>
                                                                                                <div class="form-row">
                                                                                                    <div class="input-data">
                                                                                                        <input type="time"  id="endTimeInput" value="{{ $dish->endTime }}" required>
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="endTimeInput" id="endTimeLabel" style="display: none;">End Time</label>
                                            
                                                                                                    </div>
                                                 
                                                                                                    <div class="input-data">
                                                                                                        <input type="date" required id="endDateInput" value="{{ $dish->day }}">                                                
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="startDateInput" id="startDateLabel" style="display: none;">Date</label>
                                                                                                        <input type="date" required id="startDateInput" style="display:none;">
                                                                                                    </div>
                                                                                                </div>
                                                
                                                                                                <div class="form-row">
                                                                                                    <div class="input-data">
                                                                                                        <div class="underline"></div>
                                                                                                        <label for="">Category</label>
                                                                                                        <select name="category_id" required>
                                                                                                            <option value="" disabled>Select Category</option>
                                                                                                            @foreach($categories as $category)
                                                                                                            <option value="{{ $category->id }}" {{ $category->id == $dish->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="ingredients">
                                                                                                    @if(is_array($dish->ingredients))
                                                                                                        @foreach($dish->ingredients as $ingredient)
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
                                                                                                            <a type='button' class='btns button-previous' name='Update' value='edit'>CANCEL </a>
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
                                                <form action="/dishes/{{ $dish->id }}" method="post" enctype="multipart/form-data">
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
                                                                        @if($dish->image)
                                                                            <img id="uploadedImage" src="{{ asset('path_to_images/' . $dish->image) }}" class="me-2 rounded-circle">
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
                                                            <input type="text" name="name" value="{{ $dish->name }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Dish Name</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="double" name="price" value="{{ $dish->price }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Price</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="number" name="quantity" value="{{ $dish->quantity }}" required>
                                                            <div class="underline"></div>
                                                            <label for="">Quantity</label>
                                                        </div>
                                                       
                                                        <div class="input-data">
                                                            <input type="time" required id="endTimeInput"  value="{{ $dish->startTime }}">                                                
                                                            <div class="underline"></div>
                                                            <label for="startTimeInput" id="startTimeLabel" style="display: none;">Start Time</label>
                                                            <input type="time" required id="startTimeInput" style="display:none;"> 
                                                        </div>  
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <input type="time" name="endTime" value="{{ $dish->endTime }}" required>
                                                            <div class="underline"></div>
                                                            <label for="endTimeInput" id="endTimeLabel" style="display: none;">End Time</label>
                                                        </div>
                                                        <div class="input-data">
                                                            <input type="date" name="day" value="{{ $dish->day }}" required>
                                                            <div class="underline"></div>
                                                            <label for="startDateInput" id="startDateLabel" style="display: none;">Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-data">
                                                            <div class="underline"></div>
                                                            <label for="">Category</label>
                                                            <select name="category_id" required>
                                                                <option value="" disabled>Select Category</option>
                                                                @foreach($categories as $category)
                                                                <option value="{{ $category->id }}" {{ $category->id == $dish->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="ingredients">
                                                        @if(is_array($dish->ingredients))
                                                            @foreach($dish->ingredients as $ingredient)
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
                                                                <a type='button' class='btns button-previous' name='Update' value='edit'>CANCEL </a>
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
    <script>
        document.getElementById("endTimeInput").addEventListener("click", function() {
            document.getElementById("startTimeInput").style.display = "none";
            document.getElementById("startTimeLabel").style.display = "block";
        });
        document.getElementById("endDateInput").addEventListener("click", function() {
            document.getElementById("startDateInput").style.display = "none";
            document.getElementById("startDateLabel").style.display = "block";
        });
        document.getElementById("endTimeInput").addEventListener("click", function() {
            document.getElementById("endTimeLabel").style.display = "block";
        });
        document.getElementById("quantity").addEventListener("input", function() {
            let value = this.value;
            if (value < 1) {
                this.value = "";
            }
        });
    </script>
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
        <script>
            document.getElementById('imageUpload').addEventListener('change', function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imagePreview = document.getElementById('imagePreview');
                        var uploadedImage = document.getElementById('uploadedImage');
                        uploadedImage.src = e.target.result;
                        imagePreview.style.display = 'block';
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        </script>
</body>

</html>
