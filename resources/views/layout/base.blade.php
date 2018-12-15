<!DOCTYPE HTML>
<html>

    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/lightbox.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/valhalla.css') }}">
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>

    {{-- <!DOCTYPE HTML>
    <html>

    <head>
        <title>Valhalla Gaming</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head> --}}

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
        @include('sweetalert::alert')
        @include('layout.navbar')
        <br><br>
        @yield('content') 
            

        @yield('javascript')
    </body>
    <!-- Footer -->
    <br><br>
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Valhalla Gaming. All rights reserved.</li>
            <li>Design: Alberto Gonzalez<a href="https://github.com/albergg/valhalla-gaming-laravel"> GitHub</a></li>
        </ul>
    </footer>
    
    <!-- Scripts -->
    
   
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('assets/js/browser.min.js')}}"></script>
    <script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('assets/js/util.js')}}"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('/js/lightbox.js')}}"></script>
   
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