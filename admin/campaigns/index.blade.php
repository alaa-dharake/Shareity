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
	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
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
				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Campaigns List</h4>
									<h6 class="box-subtitle">Manage Campaigns</h6>
								</div>
								<div class="box-body p-15">
									<div class="table-responsive">
										<table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
											<thead>
												<tr>
													<th>Image</th>
													<th>Campaign Name</th>
													<th>Donated Amount</th>
													<th>Number of Meals</th>
													<th>Price per Meal</th>
													<th>Author</th>
													<th>Description</th>
													<th>End Date</th>
													<th>Start Time</th>
													<th>End Time</th>
													<th>Location</th>
													<th>Meal Name</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach($campaigns as $campaign)
												<tr>
													<td><img class="meal-img" src="{{ asset('storage/' . $campaign->image) }}" alt="{{ $campaign->campaign_name }}"></td>
													<td>{{ $campaign->campaign_name }}</td>
													<td>{{ $campaign->donated_amount }}</td>
													<td>{{ $campaign->number_of_meals }}</td>
													<td>{{ $campaign->price_per_meal }}</td>
													<td>{{ $campaign->author }}</td>
													<td>{{ $campaign->description }}</td>
													<td>{{ $campaign->end_date }}</td>
													<td>{{ $campaign->start_time }}</td>
													<td>{{ $campaign->end_time }}</td>
													<td>{{ $campaign->location }}</td>
													<td>{{ $campaign->meal_name }}</td>
													<td>
														<form action="{{ route('campaigns.destroy', $campaign) }}" method="post">
															{!! csrf_field() !!}
															<input type="hidden" name="_method" value="DELETE">
															<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure you want to delete this campaign?')">
																<i class="fas fa-trash-alt" data-bs-toggle="tooltip" data-bs-original-title="Delete"></i>
															</button>
														</form>
														<form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
															@csrf
															@method('PATCH')
															<a href="{{ route('campaigns.edit', $campaign->id) }}">
																<i class="ti-pencil" aria-hidden="true"></i>
															</a>
														</form>
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
				</section>
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
