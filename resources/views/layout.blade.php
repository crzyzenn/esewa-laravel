<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Some Site</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap"
        rel="stylesheet">
</head>

<body>
    @if(Request::has('payment-success'))
        <div class="alert success" role="alert">
            <strong>Success!</strong> Thank you for the donation!
        </div>
    @elseif(Request::has('payment-failed'))
        <div class="alert error" role="alert">
            <strong>Failed!</strong> Donation attempt failed. Please try again!
        </div>
    @endif
    <img src="{{ asset('images/sebsImg.png') }}" class="main-img">
    {{-- Esewa form --}}
    <div class="container-fluid">
        @yield('content')
    </div>
</body>

</html>
