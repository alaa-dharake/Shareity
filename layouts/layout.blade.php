<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title') | O-Donate</title>

    {{-- css links --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/campaign.css') }}">
</head>
<body>
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>