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
            <input type="text" name="ingredients[]" required>
            <button type="button" onclick="removeIngredientField(this)">Remove</button>
        `;
        document.getElementById('ingredients').appendChild(ingredientDiv);
    }

    function removeIngredientField(button) {
        button.parentElement.remove();
    }
</script>
<style>
    /* Custom Styles */
    .form-section {
        background-color: #f9f9f9;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .ingredient-item {
        margin-bottom: 10px;
    }
    .ingredient-item input[type="text"] {
        width: calc(100% - 80px);
        display: inline-block;
    }
    .ingredient-item button {
        margin-left: 10px;
    }
</style>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <x-admin-header />
      
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Main content -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Basic Forms -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Meal Form</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form method="POST" action="{{ route('meals.store') }}" enctype="multipart/form-data">
                                    @csrf
                                
                                    <div class="form-section">
                                        <label for="name">Dish Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="price">Price</label>
                                        <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price"
                                            value="{{ old('price') }}" required autocomplete="price">
                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="quantity">Quantity</label>
                                        <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                                            value="{{ old('quantity') }}" required autocomplete="quantity">
                                        @error('quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="startTime">Start Time</label>
                                        <input id="startTime" type="time" class="form-control @error('startTime') is-invalid @enderror" name="startTime"
                                            value="{{ old('startTime') }}" required autocomplete="startTime">
                                        @error('startTime')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="endTime">End Time</label>
                                        <input id="endTime" type="time" class="form-control @error('endTime') is-invalid @enderror" name="endTime"
                                            value="{{ old('endTime') }}" required autocomplete="endTime">
                                        @error('endTime')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="day">Day</label>
                                        <input id="day" type="date" class="form-control @error('day') is-invalid @enderror" name="day"
                                            value="{{ old('day') }}" required autocomplete="day">
                                        @error('day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="category_id">Category</label>
                                        <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="image">Image</label>
                                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                                            required>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-section">
                                        <label for="ingredients">Ingredients</label>
                                        <div id="ingredients">
                                            <div class="ingredient-item">
                                                <input type="text" name="ingredients[]" class="form-control" required>
                                                <button type="button" onclick="removeIngredientField(this)">Remove</button>
                                            </div>
                                        </div>
                                        <button type="button" onclick="addIngredientField()">Add Ingredient</button>
                                    </div>
                                
                                    <div class="form-section">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-lg-8 -->
                </div>
                <!-- /.row justify-content-center -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /.wrapper -->

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
