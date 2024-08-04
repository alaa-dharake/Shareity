<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/security.css')}}">
    <style>
        /* Custom styles to center content */
        .content-page {
            background-image: url('{{asset('assets/images/Untitled\ design\ \(38\).jpg')}}');
            background-size: cover;
            min-height: 100vh; /* Ensure full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 100%;
            max-width: 700px; /* Adjust as needed */
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            .btn {
            display: flex;
            align-items: center;
            background: none;
            border: 1px solid #bdbdbd;
            height: 48px;
            padding: 0 24px 0 16px;
            letter-spacing: 0.25px;
            cursor: pointer;
            position: relative;
            left: 210px;
            background-color:#f5700a;
  }
        }
    </style>

</head>

<body>
    <div class="content-page" style="background-image: url('{{asset('assets/images/Untitled\ design\ \(38\).jpg')}}');background-size: cover;
        min-height: 100vh;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Change Password</h2>
                            @if (session('success'))
                            <div>{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                            <div>{{ session('error') }}</div>
                            @endif
                            <form action="{{ route('change.password.post') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="current_password"
                                        name="current_password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="new_password"
                                        name="new_password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Vendor JS -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <!-- App JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/profile.js')}}"></script>
</body>

</html>
