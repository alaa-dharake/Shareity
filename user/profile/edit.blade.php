<!DOCTYPE html>
<html lang="en" data-menu-color="brand">
<head>
    <meta charset="utf-8" />
    <title>Cook-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="shortcut icon" href="/CSC499/assets/images/homepage/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <script src="assets/js/head.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/add-dish.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
        <x-user-header/>
        <div class="content-page">
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">
                        <div class="logo-box">
                            <a href="index.html" class="logo-light">
                                <img src="{{asset('assets\images\logo__1_-removebg-preview.png')}}" alt="logo" class="logo-lg">
                                <h1>Shareity</h1>
                            </a>
                        </div>
                        <button class="button-toggle-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <ul class="topbar-menu d-flex align-items-center">
                            <li class="app-search dropdown me-3 d-none d-lg-block">
                                <form>
                                    <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
                                    <span class="fa fa-search search-icon font-16"></span>
                                </form>
                            </li>
                            <li class="d-none d-md-inline-block">
                                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                    <i class="fa fa-window-maximize font-22" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
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

                <div class="content" style="background-image: url(assets/images/Untitled\ design\ \(54\).jpg);">

                    <!-- Start Content-->
                    <div class="container-fluid" style="backdrop-filter: blur(5px);">
                
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body py-2 px-3 border-bottom border-light">
                                    <div class="row justify-content-between py-1">
                                        <div class="col-sm-7">
                                            <div class="container">
                                                <form id="editForm" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="avatar-upload">
                                                        <div class="file">
                                                            <label for="imageUpload">Click Here To Upload Your Image
                                                                <i class="mdi mdi-cloud-upload"></i>
                                                            </label>
                                                            <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" style="display: none;" />
                                                        </div>
                                                        <div id="imagePreview">
                                                            <img src="{{ $userImagePath }}" alt="User Avatar" id="imagePreviewImg">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="container">
                                                        <div class="form-row">
                                                            <div class="input-data">
                                                                <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
                                                                <div class="underline"></div>
                                                                <label for="name">First Name</label>
                                                            </div>
                                                            <div class="input-data">
                                                                <input type="text" name="lastName" value="{{ old('lastName', $user->lastName) }}" required>
                                                                <div class="underline"></div>
                                                                <label for="lastName">Last Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="input-data">
                                                                <input type="text" name="username" value="{{ old('username', $user->username) }}" required>
                                                                <div class="underline"></div>
                                                                <label for="username">Username</label>
                                                            </div>
                                                            <div class="input-data">
                                                                <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
                                                                <div class="underline"></div>
                                                                <label for="email">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="input-data">
                                                                <div class="underline"></div>
                                                                <label for="state">State</label>
                                                                <select id="state" name="state_id" required>
                                                                    <option value="" disabled>Select State</option>
                                                                    @foreach($states as $state)
                                                                        <option value="{{ $state->id }}" {{ $user->state_id == $state->id ? 'selected' : '' }}>
                                                                            {{ $state->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                
                                                                @error('state_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="input-data">
                                                                <div class="underline"></div>
                                                                <label for="city">City</label>
                                                                <select id="city" name="city_id" required>
                                                                    <option value="" disabled>Select city</option>
                                                                    @foreach($cities as $city)
                                                                    <option value="{{ $city->id }}" {{ $user->city_id == $city->id ? 'selected' : '' }}>
                                                                        {{ $city->name }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('city_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="forms">
                                                        <div class="row mt-4">
                                                            <button type="button" class="btn btn-primary" onclick="window.history.back();">CANCEL</button>
                                                        </div>
                                            
                                                        <div class="row mt-4">
                                                            <button type="button" class="btn btn-primary" id="saveBtn">SAVE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                               
                                                <form id="deleteForm" action="{{ route('user.destroy') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-delete" id="deleteBtn">
                                                        <span class="mdi mdi-delete mdi-24px"></span>
                                                        <span class="mdi mdi-delete-empty mdi-24px"></span>
                                                        <span>Delete account permanently</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end row-->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </div>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script src="assets/js/profile.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageUploadInput = document.getElementById('imageUpload');
            const imagePreview = document.getElementById('imagePreview');
            const imagePreviewImg = document.getElementById('imagePreviewImg');
    
            imageUploadInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreviewImg.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            // Initialize Select2 for state dropdown
            $('.select-state').select2();
    
            // Initialize Select2 for city dropdown (currently disabled)
            $('.select-city').select2({
                disabled: true // Disable until a state is selected
            });
    
            // On change event for state dropdown
            $('.select-state').on('change', function() {
                // Enable city dropdown
                $('.select-city').prop('disabled', false);
                // Dynamically load city options based on the selected state (not implemented here)
                // You can fetch city options via AJAX and populate the dropdown accordingly
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stateSelect = document.getElementById('state');
            const citySelect = document.getElementById('city');
    
            stateSelect.addEventListener('change', function () {
                const stateId = this.value;
    
                if (stateId) {
                    fetch(`/cities/${stateId}`)
    
                        .then(response => response.json())
                        .then(data => {
                            console.log('Cities data:', data); // Log received data
                            citySelect.innerHTML = '<option value="">Select City</option>';
                            data.forEach(city => {
                                console.log('Adding city:', city.name); // Log each city being added
                                citySelect.innerHTML += `<option value="${city.id}">${city.name}</option>`;
    
    
                            });
                        })
                        .catch(error => console.error('Error fetching cities:', error)); // Add catch block here
                } else {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                }
            });
        });
    </script>

    <script>
        document.getElementById('saveBtn').addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to save the changes to your profile?')) {
                document.getElementById('editForm').submit();
            }
        });

        document.getElementById('deleteBtn').addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
                document.getElementById('deleteForm').submit();
            }
        });
    </script>
</body>
</html>
