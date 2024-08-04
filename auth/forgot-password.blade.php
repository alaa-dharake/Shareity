<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
            color: #f5700a;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Forgot Password</h2>

        @if (session('status'))
            <div class="alert">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <button type="submit">Send Password Reset Link</button>
            </div>
        </form>
    </div>

    <!-- Vendor JS -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <!-- App JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
</body>
</html>
