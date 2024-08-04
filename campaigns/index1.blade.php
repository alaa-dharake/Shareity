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

		<header class="main-header">
			<div class="d-flex align-items-center logo-box justify-content-start">
				<a href="#"
					class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent"
					data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
							class="path3"></span></span>
				</a>
				<!-- Logo -->
				<a href="index.html" class="logo">
					<!-- logo-->
					<div class="logo-lg">
						<span class="light-logo"><img src="../images/logo-dark-text-1.png" alt="logo"></span>
						<span class="dark-logo"><img src="../images/logo-light-text-1.png" alt="logo"></span>
					</div>
				</a>
			</div>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">
				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav">
						<li class="btn-group nav-item d-lg-inline-flex d-none">
							<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen"
								title="Full Screen">
								<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group d-lg-inline-flex d-none">
							<div class="app-menu">
								<div class="search-bx mx-5">
									<form>
										<div class="input-group">
											<input type="search" class="form-control" placeholder="Search"
												aria-label="Search" aria-describedby="button-addon2">
											<div class="input-group-append">
												<button class="btn" type="submit" id="button-addon3"><i
														class="ti-search"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</li>
						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
								title="User">
								<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
							</a>
							<ul class="dropdown-menu animated flipInX">
								<li class="user-body">
									<a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i>
										Profile</a>
									<a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My
										Wallet</a>
									<a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i>
										Settings</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<!-- sidebar-->
			<section class="sidebar position-relative">
				<div class="multinav">
					<div class="multinav-scroll" style="height: 100%;">
						<!-- sidebar menu-->
						<ul class="sidebar-menu" data-widget="tree">
							<li class="header">Dashboard</li>
							<li class="treeview">
								<a href="#">
									<i class="icon-Layout-4-blocks"><span class="path1"></span><span
											class="path2"></span></i>
									<span>Dashboard</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="Admin-Dashboard.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Admin
											Dashboard</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="icon-Layout-grid"><span class="path1"></span><span
											class="path2"></span></i>
									<span>Campaigns</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="Campaigns.html"><i class="icon-Commit"><span class="path1"></span><span
													class="path2"></span></i>Campaigns</a>
									</li>

								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="icon-Layout-grid"><span class="path1"></span><span
											class="path2"></span></i>
									<span>Customers</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="Customers-Table.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Customers</a>
									</li>

								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="icon-Layout-grid"><span class="path1"></span><span
											class="path2"></span></i>
									<span>Dishes</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="Dishes-list.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Dishes</a>
									</li>

								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="icon-Layout-grid"><span class="path1"></span><span
											class="path2"></span></i>
									<span>Chefs</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="Chef-list-profiles.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Chefs</a>
									</li>

								</ul>
							</li>
							<li class="header">LOGIN & ERROR </li>
							<li class="treeview">
								<a href="#">
									<i class="icon-Chat-locked"><span class="path1"></span><span
											class="path2"></span></i>
									<span>Authentication</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="auth_login.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Login</a></li>
									<li><a href="auth_register.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Register</a>
									</li>
									<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Lockscreen</a>
									</li>
									<li><a href="auth_user_pass.html"><i class="icon-Commit"><span
													class="path1"></span><span class="path2"></span></i>Recover
											password</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</aside>
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
										
    <table id="campaigns" class="table mt-0 table-hover no-wrap" data-page-size="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Campaign Name</th>
                <th>Donated Amount</th>
                <th>Number of Meals</th>
                <th>Price per Meal</th>
                <th>Author</th>
                <th>Description</th>
                <th>Image</th>
                <th>End Date</th>
                <th>Meal Name</th>
                <th>Ingredients</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campaigns as $campaign)
                <tr>
                    <td>{{ $campaign->id }}</td>
                    <td>{{ $campaign->campaign_name }}</td>
                    <td>{{ $campaign->donated_amount }}</td>
                    <td>{{ $campaign->number_of_meals }}</td>
                    <td>{{ $campaign->price_per_meal }}</td>
                    <td>{{ $campaign->author }}</td>
                    <td>{{ $campaign->description }}</td>
                    <td>
                        @if($campaign->image)
                            <img src="{{ asset('storage/' . $campaign->image) }}" alt="Campaign Image" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $campaign->end_date }}</td>
                    <td>{{ $campaign->meal_name }}</td>
                    <td>{{ json_encode($campaign->ingredients) }}</td>
                    <td>{{ $campaign->start_time }}</td>
                    <td>{{ $campaign->end_time }}</td>
					<td>
						<form action="{{ route('campaigns.destroy', $campaign) }}" method="post">
							{!! csrf_field() !!}
							<!-- Use the method spoofing for DELETE request -->
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					   
						
						 <a href="{{ route('campaigns.create') }}" class="text-warning" data-bs-toggle="tooltip" data-bs-original-title="Add">
							 <i class="ti-plus" aria-hidden="true"></i>
						 </a>
						 <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
							@csrf
							@method('PUT')
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
