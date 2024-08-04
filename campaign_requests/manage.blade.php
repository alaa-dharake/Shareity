<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>User-Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo (1).png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<style>
    ul.topbar-menu.d-flex.align-items-center {
        position: relative;
        left: 427px;
    }
    .meal-requests-list {
    list-style: none;
    padding: 0;
    width: 1182px;
}
    .meal-requests-list li {
        background: rgba(255, 255, 255, 0.8);
        margin: 10px 0;
        padding: 15px;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .meal-requests-list li form {
        display: flex;
        align-items: center;
    }
    .meal-requests-list li select {
        margin-right: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .meal-requests-list li button {
        background-color: #053b21;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    .meal-requests-container h1 {
    color: #f5700a;
    position: relative;
    text-align: start;
    left: 10px;
}
    .meal-requests-list li button:hover {
        background-color: #053b21;
    }
    .meal-requests-list li div{
            color: #f5700a;
        }
        .meal-requests-list li {
            color: #053b21;
        }
</style>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Toast Notification Container -->
        <div id="toastContainer" aria-live="polite" aria-atomic="true"
            style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
        </div>

        <!-- ========== Menu ========== -->
        <x-chef-header />

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <!-- ========== Topbar End ========== -->

                <div class="content" style="background-image: url('/assets/images/Untitled design (38).jpg');">


                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="position: relative;top: 12px;background: transparent;">
                                    <div class="card-body">
                                        <div class="row justify-content-between mb-2">
                                            <div class="col-auto">
                                                <form class="search-bar position-relative mb-sm-0 mb-2">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="mdi mdi-magnify"></span>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="meal-requests-container">
                                            <h1>Manage Campaign Requests</h1>
                                            <ul class="meal-requests-list">
                                                @foreach($campaignRequests as $request)
                                                <li>
                                                    <span>{{ $request->user->username }}</span>
                                                    -
                                                    <div>{{ $request->campaign_name }}</div>
                                                    -
                                                    <span>{{ $request->campaign_description }}</span>
                                                    -
                                                    <div>{{ $request->campaign_meal}}</div>
                                                    -
                                                    <span>{{ $request->campaign_date }}</span>
                                                    -
                                                    <div>{{ $request->campaign_startTime }}</div>
                                                    -
                                                    <div>{{ $request->campaign_endTime }}</div>
                                                    
                                                    <div>
                                                        <form action="{{ route('campaign_requests.update_status', $request) }}"
                                                            method="POST" id="updateStatusForm-{{ $request->id }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <select name="status">
                                                                <option value="accepted"
                                                                    {{ $request->status == 'accepted' ? 'selected' : '' }}>
                                                                    Accept</option>
                                                                <option value="rejected"
                                                                    {{ $request->status == 'rejected' ? 'selected' : '' }}>
                                                                    Reject</option>
                                                            </select>
                                                            <button type="button"
                                                                onclick="confirmUpdate('{{ $request->id }}')">Update
                                                                Status</button>
                                                        </form>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div> <!-- content-page -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div> <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        function confirmUpdate(requestId) {
            if (confirm('Are you sure you want to update the status?')) {
                const form = document.getElementById(`updateStatusForm-${requestId}`);
                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => {
                    return response.json().then(data => {
                        if (response.ok) {
                            toastr.success('Status updated successfully');
                            setTimeout(() => {
                                location.reload();
                            }, 1000); // Optional: Reload the page after 1 second
                        } else {
                            toastr.error(data.message || 'Failed to update status');
                        }
                    });
                }).catch(error => {
                    toastr.error('An error occurred');
                });
            }
        }
    </script>

</body>

</html>