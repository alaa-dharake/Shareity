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
                                <h4 class="box-title">Campaign Form</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form method="POST" action="{{ route('campaigns.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-section">
                                        <label for="campaign_name">Campaign Name:</label>
                                        <input type="text" id="campaign_name" class="form-control @error('campaign_name') is-invalid @enderror"
                                            placeholder="Enter campaign name" name="campaign_name" value="{{ old('campaign_name') }}" required>
                                        @error('campaign_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="price_per_meal">Price Per Meal:</label>
                                        <input type="number" id="price_per_meal" class="form-control @error('price_per_meal') is-invalid @enderror"
                                            placeholder="Enter price per meal" name="price_per_meal" value="{{ old('price_per_meal') }}" required>
                                        @error('price_per_meal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="description">Description:</label>
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                                            rows="3" placeholder="Enter campaign description" name="description" required>{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="end_date">End Date:</label>
                                        <input type="date" id="end_date" class="form-control @error('end_date') is-invalid @enderror"
                                            name="end_date" value="{{ old('end_date') }}" required>
                                        @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="image">Image:</label>
                                        <input type="file" id="image" class="form-control-file @error('image') is-invalid @enderror"
                                            name="image" required>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="start_time">Start Time:</label>
                                        <input type="time" id="start_time" class="form-control @error('start_time') is-invalid @enderror"
                                            name="start_time" value="{{ old('start_time') }}" required>
                                        @error('start_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="end_time">End Time:</label>
                                        <input type="time" id="end_time" class="form-control @error('end_time') is-invalid @enderror"
                                            name="end_time" value="{{ old('end_time') }}" required>
                                        @error('end_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="location">Location:</label>
                                        <input type="text" id="location" class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Enter location" name="location" value="{{ old('location') }}" required>
                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-section">
                                        <label for="meal_name">Meal Name:</label>
                                        <input type="text" id="meal_name" class="form-control @error('meal_name') is-invalid @enderror"
                                            placeholder="Enter meal name" name="meal_name" value="{{ old('meal_name') }}" required>
                                        @error('meal_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create Campaign</button>
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

    <!-- Your custom scripts here -->

</body>
</html>
