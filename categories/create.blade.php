<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Novo Admin - Dashboard</title>

<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/vendors_css.css') }}">
<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/skin_color.css') }}">
<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/custom.css') }}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<div class="wrapper">
		<div id="loader"></div>
		<x-admin-header />

		

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Main content -->
                <div class="col-lg-6 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Form Sections</h4>
						</div>
						<!-- /.box-header -->
						<form action="/admin/categories" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
							<div class="box-body">
								<h4 class="mt-0 mb-20">Category Info:</h4>
								<div class="form-group">
                                    <label class="form-label">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter category name" name="name" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Slug:</label>
                                    <input type="text" class="form-control" placeholder="Enter category slug" name="slug" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image:</label>							
                                    <input type="file" class="form-control" name="image">
                                </div>
                                
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-danger">Cancel</button>
								<button type="submit" class="btn btn-success pull-right">Add</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
				<!-- /.content -->
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