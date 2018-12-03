<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" /> {{-- /resources/assets/css/main.css --}}
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>


{{-- <!DOCTYPE HTML>
<html>

<head>
    <html lang="es" dir="ltr">
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('/assets/css/noscript.css')}}" /></noscript>

</head> --}}

<body>
    @include('layout.navbar')
    <br><br>
    @yield('content') 
        

    @yield('javascript')
</body>

</html>














{{-- GRAYSCALE --}}
{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/grayscale.css') }}">

    <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    
</head>

<body>
    @include('layout.navbar')

    <div class="container">
        @yield('content')
        @yield('javascript')
    </div>
</body>

</html> --}}