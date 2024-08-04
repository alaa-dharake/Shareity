<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <style>
        /* Custom styles */
        body {
            background-image: url('{{asset('assets/images/Untitled\ design\ \(38\).jpg')}}');
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .card {
            max-width: 700px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            height: 500px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #f5700a;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #053b21;
        }
        .alert {
            margin-top: 10px;
            padding: 10px;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            color: #a94442;
            border-radius: 4px;
        }
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
            left: 254px;
            background-color:#f5700a;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Reset Password</h2>

        @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ $email }}" readonly><br><br>

            <label for="password">New Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <label for="password_confirmation">Confirm New Password:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
    </div>

    <!-- Vendor JS -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <!-- App JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
</body>

</html>
