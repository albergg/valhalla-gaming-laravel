<!DOCTYPE HTML>
<html>

<head>
    <title>Valhalla Gaming</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" />
    {{-- /resources/assets/css/main.css --}}
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload landing">
    <div id="page-wrapper">
        @include('layout.navbar')
        

        <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                    <h2>The future has landed</h2>
                    <p>And there are no hoverboards or flying cars.<br /> Just apps. Lots of mother flipping apps.</p>
                </header>
                <span class="image"><img src="{{ asset('/storage/index/carrousel/valhalla-logo.png') }}" alt="" /></span>
            </div>
            <a href="#one" class="goto-next scrolly">Next</a>
        </section>

        <!-- One -->
        <section id="one" class="spotlight style1 bottom">
            <span class="image fit main"><img src="{{ asset('/storage/index/carrousel/aourus-banner.jpg') }}" alt="" /></span>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-12-medium">
                            <header>
                                <h2>Odio faucibus ipsum integer consequat</h2>
                                <p>Nascetur eu nibh vestibulum amet gravida nascetur praesent</p>
                            </header>
                        </div>
                        <div class="col-4 col-12-medium">
                            <p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec. Blandit orci porttitor semper. Arcu
                                phasellus tortor enim mi nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
                                augue varius tempus lobortis porttitor accumsan consequat adipiscing lorem dolor.</p>
                        </div>
                        <div class="col-4 col-12-medium">
                            <p>Morbi enim nascetur et placerat lorem sed iaculis neque ante adipiscing adipiscing metus massa.
                                Blandit orci porttitor semper. Arcu phasellus tortor enim mi mi nisi praesent adipiscing.
                                Integer mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem ipsum dolor nullam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#two" class="goto-next scrolly">Next</a>
        </section>

        <!-- Two -->
        <section id="two" class="spotlight style2 right">
            <span class="image fit main"><img src="{{ asset('/storage/index/carrousel/gtx2080-banner.jpg') }}" alt="" /></span>
            <div class="content">
                <header>
                    <h2>Interdum amet non magna accumsan</h2>
                    <p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
                </header>
                <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
                    mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing
                    lorem.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
            </div>
            <a href="#three" class="goto-next scrolly">Next</a>
        </section>

        <!-- Three -->
        <section id="three" class="spotlight style3 left">
            <span class="image fit main bottom"><img src="{{ asset('/storage/index/carrousel/ryzen-models-banner.jpg') }}" alt="" /></span>
            <div class="content">
                <header>
                    <h2>Interdum felis blandit praesent sed augue</h2>
                    <p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
                </header>
                <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
                    mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing
                    lorem.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
            </div>
            <a href="#four" class="goto-next scrolly">Next</a>
        </section>

        <!-- Four -->
        <section id="four" class="wrapper style1 special fade-up">
            <div class="container">
                <header class="major">
                    <h2>Accumsan sed tempus adipiscing blandit</h2>
                    <p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
                </header>
                <div class="box alt">
                    <div class="row gtr-uniform">
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-area-chart"></span>
                            <h3>Ipsum sed commodo</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-comment"></span>
                            <h3>Eleifend lorem ornare</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-flask"></span>
                            <h3>Cubilia cep lobortis</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-paper-plane"></span>
                            <h3>Non semper interdum</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-file"></span>
                            <h3>Odio laoreet accumsan</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-lock"></span>
                            <h3>Massa arcu accumsan</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                    </div>
                </div>
                <footer class="major">
                    <ul class="actions special">
                        <li><a href="#" class="button">Magna sed feugiat</a></li>
                    </ul>
                </footer>
            </div>
        </section>

        <!-- Five -->
        <section id="five" class="wrapper style2 special fade">
            <div class="container">
                <header>
                    <h2>Magna faucibus lorem diam</h2>
                    <p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
                </header>
                <form method="post" action="#" class="cta">
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
                        <div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
                    </div>
                </form>
            </div>
        </section>

        {{-- <div id="carouselIndex" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('/storage/index/carrousel/ryzen-models-banner.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/storage/index/carrousel/aourus-banner.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/storage/index/carrousel/gtx2080-banner.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/storage/index/carrousel/ballistix-banner.jpg') }}" alt="fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/storage/index/carrousel/ryzen-banner.jpg') }}" alt="fifth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselIndex" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div> --}}

        <!-- Footer -->
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
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

{{-- <html>

<head>
    <title>My Now Amazing Webpage</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    
    
</head>

<body>

    <div class="your-class">
        <div><img class="d-block w-100" src="{{ asset('/storage/index/carrousel/aourus-banner.jpg') }}"></div>
        <div><img class="d-block w-100" src="{{ asset('/storage/index/carrousel/gtx2080-banner.jpg') }}"></div>
        <div><img class="d-block w-100" src="{{ asset('/storage/index/carrousel/ryzen-banner.jpg') }}"></div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
      $('.your-class').slick({
        // setting-name: setting-value
        dots: true, infinite: true, speed: 500, fade: true, cssEase: 'linear',
      });
    });
    </script>

</body>

</html> --}}

{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Valhalla Gaming</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Valhalla Gaming
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
