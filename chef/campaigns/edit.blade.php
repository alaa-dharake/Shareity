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
    <script src="{{asset('assets/js/head.js')}}"></script>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/add-dish1.css')}}" rel="stylesheet" type="text/css" />
	<script>
		function addIngredientField() {
			const ingredientDiv = document.createElement('div');
			ingredientDiv.innerHTML = `
				<input type="text" name="ingredients[]" required>
				<button type="button" onclick="removeIngredientField(this)">Remove</button>
			`;
			document.getElementById('ingredients').appendChild(ingredientDiv);
		}
	
		function removeIngredientField(button) {
			button.parentElement.remove();
		}
	</script>
</head>
<body>
    <div id="wrapper">
        <x-chef-header/>
        <div class="content-page">
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">
                        <div class="logo-box">
                            <a href="index.html" class="logo-light">
                                <img src="assets/images/logo_1-removebg-preview.png" alt="logo" class="logo-lg">
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
                        
                        </ul>
                    </div>
                </div>

                <div class="content" style="background-image: url('/assets/images/Untitled design (38).jpg');">

                    <div class="container-fluid">
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body py-2 px-3 border-bottom border-light">
                                    <div class="row justify-content-between py-1">
                                        <div class="col-sm-7">
                                            <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="d-flex align-items-start">
                                                    <div class="container">
                                                        <div class="avatar-upload">
                                                            <div class="file">
                                                                <label for="imageUpload">Click Here To Upload Your Image
                                                                    <i class="mdi mdi-cloud-upload"></i>
                                                                </label>
                                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" style="display: none;" name="image"/>
                                                            </div>
                                                            <div>
                                                                <div id="imagePreview">
                                                                    <img id="uploadedImage" class="me-2 rounded-circle" src="{{ asset('storage/' . $campaign->image) }}" alt="{{ $campaign->campaign_name }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="text" required name="campaign_name" value="{{ $campaign->campaign_name }}">
                                                        <div class="underline"></div>
                                                        <label for="">Campaign Name</label>
                                                    </div>
                                                    <div class="input-data">
                                                        <input type="text" required name="meal_name" value="{{ $campaign->meal_name }}">
                                                        <div class="underline"></div>
                                                        <label for="">Meal Name</label>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="number" required step="0.01" name="price_per_meal" value="{{ $campaign->price_per_meal }}">
                                                        <div class="underline"></div>
                                                        <label for="">Price Per Meal</label>
                                                    </div>
                                                
                                                </div>
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="date" required name="end_date" value="{{ $campaign->end_date }}">
                                                        <div class="underline"></div>
                                                        <label for="endDateInput">End Date</label>
                                                    </div>
                                                    <div class="input-data">
                                                        <input type="time" required name="start_time" value="{{ $campaign->start_time }}">
                                                        <div class="underline"></div>
                                                        <label for="startTimeInput">Start Time</label>
                                                    </div>
                                                    <div class="input-data">
                                                        <input type="time" required name="end_time" value="{{ $campaign->end_time }}">
                                                        <div class="underline"></div>
                                                        <label for="endTimeInput">End Time</label>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="text" required name="location" value="{{ $campaign->location }}">
                                                        <div class="underline"></div>
                                                        <label for="locationInput">Location</label>
                                                    </div>
                                                </div>
                                            
                                                <div class="form-row">
                                                    <div class="input-data">
                                                        <input type="text" required name="description" value="{{ $campaign->description }}">
                                                        <div class="underline"></div>
                                                        <label for="descriptionInput">Description</label>
                                                    </div>
                                                </div>
                                      
                                                <div class="forms">
                                                    <div class="row mt-4">
                                                        <button type="button" class="btn btn-primary" onclick="window.history.back();">CANCEL</button>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <button type="submit" class="btn btn-primary">SAVE</button>
                                                    </div>
                                                </div>
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
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <script src="{{asset('assets/js/profile.js')}}"></script>
    <script>
          document.addEventListener('DOMContentLoaded', function() {
        const imageUploadInput = document.getElementById('imageUpload');
        const uploadedImage = document.getElementById('uploadedImage');

        imageUploadInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
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

</body>

</html>
