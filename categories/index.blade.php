<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">

	<title>Shareity-Admin-Template</title>
	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/vendors_css.css') }}">
	<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/main/css/skin_color.css') }}">
	<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/assets/vendor_components/fullcalendar/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Capstone-Admin-Template/assets/vendor_components/fullcalendar/fullcalendar.print.min.css') }}">


</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

	<div class="wrapper">
		<div id="loader"></div>

		<x-admin-header />

		
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Support Ticket List</h4>
									<h6 class="box-subtitle">List of ticket opend by customers</h6>
								</div>
								<div class="box-body p-15">
									<div class="table-responsive">
										<table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
											<thead>
												<tr>
													<th>Image</th>
													<th>Name</th>
													<th>Slug</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($categories as $category)
												<tr>
													<td><img class="meal-img" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name}}"></td>
                                             
													<td>
														{{$category->name}}
													</td>
													<td>{{$category->slug}}</td>
													
													<td>

                                                        <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
															{!! csrf_field() !!}
															<input type="hidden" name="_method" value="DELETE">
															<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure you want to delete this campaign?')">
																<i class="fas fa-trash-alt" data-bs-toggle="tooltip" data-bs-original-title="Delete"></i>
															</button>
														</form>
														
                                                        
														 <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
															@csrf
															@method('PATCH')
															<a href="{{ route('admin.categories.edit', $category->id) }}">
																<i class="ti-pencil" aria-hidden="true"></i>
															</a>														</form>
                                                        
													</td>
												</tr>
                                                @endforeach
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.row -->

				</section>
				<!-- /.content -->
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('Capstone-Admin-Template/main/js/template.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/main/js/vendors.min.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/main/js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/main/js/pages/data-table.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/main/js/pages/pp-ticket.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('Capstone-Admin-Template/assets/vendor_components/jquery.peity/jquery.peity.js') }}"></script>
</body>
</html>
