<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Novo Admin - Dashboard</title>

    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/vendors_css.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/custom.css') }}">

    <script>
        function addIngredientField() {
            const ingredientDiv = document.createElement('div');
            ingredientDiv.innerHTML = `
                <input type="text" name="ingredients[]" class="form-control" placeholder="Enter ingredient">
                <button type="button" class="btn btn-danger" onclick="removeIngredientField(this)">Remove</button>
            `;
            document.getElementById('ingredients').appendChild(ingredientDiv);
        }

        function removeIngredientField(button) {
            button.parentElement.remove();
        }
    </script>
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>

        <!-- Your header and sidebar code here -->

        <div class="content-wrapper">
            <div class="container-full">
                <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Edit Campaign</h4>
                        </div>

                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $campaign->id }}">

                            <div class="form-group">
                                <label class="form-label">Campaign Name:</label>
                                <input type="text" class="form-control" placeholder="Enter campaign name" name="campaign_name" value="{{ $campaign->campaign_name }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Price Per Meal:</label>
                                <input type="number" class="form-control" placeholder="Enter price per meal" name="price_per_meal" value="{{ $campaign->price_per_meal }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Description:</label>
                                <textarea class="form-control" rows="3" placeholder="Enter campaign description" name="description">{{ $campaign->description }}</textarea>
                            </div>
                            <div>
                                <label for="end_date">End Date</label>
                                <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $campaign->end_date->format('Y-m-d')) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Image:</label>
                                <input type="file" class="form-control" name="image">
                                @if($campaign->image)
                                <img class="meal-img" src="{{ asset('storage/' . $campaign->image) }}" alt="Campaign Image" width="100">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Start Time:</label>
                                <input type="time" class="form-control" name="start_time" value="{{ $campaign->start_time }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">End Time:</label>
                                <input type="time" class="form-control" name="end_time" value="{{ $campaign->end_time }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Location:</label>
                                <input type="text" class="form-control" placeholder="Enter location" name="location" value="{{ $campaign->location }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meal Name:</label>
                                <input type="text" class="form-control" placeholder="Enter meal name" name="meal_name" value="{{ $campaign->meal_name }}">
                            </div>
                            <div class="form-group">
                                <label>Ingredients:</label>
                                <div id="ingredients">
                                    @foreach($campaign->ingredients as $ingredient)
                                        <div>
                                            <input type="text" name="ingredients[]" class="form-control" placeholder="Enter ingredient" value="{{ $ingredient }}">
                                            <button type="button" class="btn btn-danger" onclick="removeIngredientField(this)">Remove</button>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-primary mt-2" onclick="addIngredientField()">Add Ingredient</button>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Campaign</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/template.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/vendors.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/main/js/pages/calendar.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>
</body>
</html>
