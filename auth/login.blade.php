<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">

    <style>
        .forgot-password {
            margin-top: 20px; /* Adjust this value as needed */
        }

        .forgot-password a {
            color: #f5700a;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #053b21;
        }

        .more-btn {
            background-color: #f5700a;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .more-btn:hover {
            background-color: #053b21;
        }

        .invalid-credentials {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="main">

        <!-- Sign in Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('colorlib-regform-7/colorlib-regform-7/images/register.png') }}" alt="sign up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="{{ route('login') }}" id="loginForm">
                            @csrf    
                            <div class="form-row">
                                <div class="input-data">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="email">Enter your Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="underline"></div>
                                </div>

                                <div class="input-data">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="password">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="underline"></div>
                                </div>
                            </div>

                            @if(session('error'))
                                <div class="invalid-credentials">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <button type="submit" class="more-btn">
                                {{ __('Login') }}
                            </button>

                            <!-- Forgot Password Link -->
                            <div class="forgot-password">
                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Front-end validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            let valid = true;

            // Email validation
            const email = document.getElementById('email');
            const emailValue = email.value.trim();
            if (!emailValue) {
                valid = false;
                email.nextElementSibling.innerHTML = '<strong>Email is required</strong>';
            } else {
                email.nextElementSibling.innerHTML = '';
            }

            // Password validation
            const password = document.getElementById('password');
            const passwordValue = password.value.trim();
            if (!passwordValue) {
                valid = false;
                password.nextElementSibling.innerHTML = '<strong>Password is required</strong>';
            } else {
                password.nextElementSibling.innerHTML = '';
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
