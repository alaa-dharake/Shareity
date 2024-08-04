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
									<h4 class="box-title">Feedbacks</h4>
									<h6 class="box-subtitle">Sent by the users</h6>
								</div>
								<div class="box-body p-15">
									<div class="table-responsive">
										@extends('layouts.app')



    <table id="feedbacks" class="table mt-0 table-hover no-wrap" data-page-size="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->user->username }}</td>
                <td>{{ $feedback->firstName }}</td>
                <td>{{ $feedback->lastName }}</td>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->subject }}</td>
                <td>{{ $feedback->message }}</td>
                <td>
                    <!-- Delete button -->
                    <form action="{{ route('feedback.destroy', $feedback) }}" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure you want to delete this feedback?')">
                            <i class="fas fa-trash-alt" data-bs-toggle="tooltip" data-bs-original-title="Delete"></i>
                        </button>
                    </form>
                    <!-- Edit button -->
                   
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
					</div>
					<!-- /.row -->

				</section>
				<!-- /.content -->
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Find all delete buttons and attach a click event listener
            const deleteButtons = document.querySelectorAll('.delete-feedback');
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    const feedbackId = this.getAttribute('data-id');
                    
                    // Ask for confirmation
                    if (confirm('Are you sure you want to delete this feedback?')) {
                        // If confirmed, submit the form
                        document.getElementById('deleteForm' + feedbackId).submit();
                    }
                });
            });
        });
        </script>
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
