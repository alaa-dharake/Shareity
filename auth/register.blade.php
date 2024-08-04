<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets\css\register.css')}}">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <!-- <figure><img src="images/undraw_diet_ghvw.png" alt="sing up image"></figure> -->
                        <figure><img src={{asset('colorlib-regform-7\colorlib-regform-7\images\register.png')}}
                                alt="sing up image"></figure>

                        <!-- <a href="#" class="signup-image-link">Create an account</a> -->
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-row">
                                <div class="same-row">
                                    <div class="input-data">
                                        <input type="text" required name="name">
                                        <div class="underline"></div>
                                        <label for="">First Name</label>
                                    </div>
                                    <div class="input-data">
                                        <input type="text" required name="lastName">
                                        <div class="underline"></div>
                                        <label for="">Last Name</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="input-data">
                                        <input type="text" required name="username">
                                        <div class="underline"></div>
                                        <label for="">Username</label>
                                    </div>
                                </div>
                                <div class="same-row">
                                    <div class="input-data">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="underline"></div>
                                        <label for="">Email</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="input-data">
                                            <select id="chef" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                                <option value="">Select Role</option>
                                                <option>chef</option>
                                                <option>user</option>
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="same-row">
                                    <div class="form-row">
                                        <div class="input-data">
                                            <select id="state" class="form-control @error('state_id') is-invalid @enderror" name="state_id" required>
                                                <option value="">Select State</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('state_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-data">
                                        <select id="city" class="form-control @error('city_id') is-invalid @enderror" name="city_id" required>
                                            <option value="">Select City</option>
                                            <!-- Cities will be populated by JavaScript -->
                                        </select>
                                        @error('city_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="same-row">
                                    <div class="input-data">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert" style="color: orange;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="underline"></div>
                                        <label for="">Password</label>
                                    </div>
                                    <div class="input-data">
                                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                        <div class="underline"></div>
                                        <label for="">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="more-btn">
                                {{ __('Register') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.getElementById("birthdayInput").addEventListener("focus", function() {
            this.setAttribute("type", "date");
        });

        document.getElementById("birthdayInput").addEventListener("blur", function() {
            if (!this.value) {
                this.setAttribute("type", "text");
            }
        });

    </script>
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2 for state dropdown
            $('.select-state').select2();

            // Initialize Select2 for city dropdown (currently disabled)
            $('.select-city').select2({
                disabled: true // Disable until a state is selected
            });

            // On change event for state dropdown
            $('.select-state').on('change', function() {
                // Enable city dropdown
                $('.select-city').prop('disabled', false);
                // Dynamically load city options based on the selected state (not implemented here)
                // You can fetch city options via AJAX and populate the dropdown accordingly
            });
        });
    </script>
    <script>
        // Place this in your main.js or inside a <script> tag at the end of your HTML body

        document.addEventListener('DOMContentLoaded', function() {
            const stateSelect = document.getElementById('state');
            const citySelect = document.getElementById('city');

            stateSelect.addEventListener('change', function() {
                const stateId = this.value;

                if (stateId) {
                    fetch(`/cities/${stateId}`)
                        .then(response => response.json())
                        .then(data => {
                            console.log('Cities data:', data); // Log received data
                            citySelect.innerHTML = '<option value="">Select City</option>';
                            data.forEach(city => {
                                citySelect.innerHTML += `<option value="${city.id}">${city.name}</option>`;
                            });
                        })
                        .catch(error => console.error('Error fetching cities:', error));

                } else {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                }
            });
        });
    </script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
