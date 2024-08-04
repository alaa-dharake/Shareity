@extends('layouts.layout')

@section('page-title')
Make Donation
@endsection

@section('content')

    <form class="register-form" action="{{ route('create-donation-session')}}" method="POST" onsubmit="return validateForm()">
        @csrf
        <h3 class="caption">You are making a donation to {{ $current_campaign->campaign_name }}</h3>
        <div class="form-item">
            <label for="amount">Enter Amount To Donate</label>
            <input type="number" name="amount" id="amount" placeholder="Amount" required>
        </div>
        <input type="hidden" name="campaign_id" value="{{ $current_campaign->id }}">
        <button type="submit" class="btn btn-blue">Donate</button>
    </form>

    <div id="toast" class="toast-error">Amount cannot be negative.</div>

    <style>
        .toast-error {
            display: none;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px;
            background-color: #f5700a; /* Updated color code */
            color: white;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
    </style>

    <script>
        function validateForm() {
            var amountField = document.getElementById("amount");
            var amount = amountField.value;

            if (amount < 0) {
                var toast = document.getElementById("toast");
                toast.style.display = "block"; // Show the toast notification

                setTimeout(function() {
                    toast.style.display = "none"; // Hide the toast after 3 seconds
                }, 3000);

                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
@endsection
