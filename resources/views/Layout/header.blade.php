<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nubis Webpage Title</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="{{ asset('css/homepage/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/homepage/styles.css') }}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('images/homepage/favicon.png') }}">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <a class="navbar-brand logo-image" href="{{ url('/') }}"><img src="{{ asset('images/homepage/logo.svg') }}"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#details">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Get Qoute</a>
                    </li>
                    @if(Auth::check())
                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboardAdmin')}}">Dashboard Admin</a>
                        </li>
                        @endif
                    @endif
                </ul>

                @if(Auth::check())
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{url('/logout')}}">Logout</a>
                </span>
                @else
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{url('/login')}}">Login Admin</a>
                </span>
                @endif

            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    @yield('headerApp')

    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-circles" src="{{ asset('images/homepage/decoration-circles.png') }}" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>If you want to find out which are the right influencers for your product marketing campaigns then follow us</h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="article.html">Article Details</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="p-small statement">Copyright © <a href="#">Your name</a></p>
                </div> <!-- end of col -->

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="p-small statement">Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    	
    <!-- Scripts -->
    <script src="{{ asset('js/homepage/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/homepage/swiper.min.js') }}"></script>
    <script src="{{ asset('js/homepage/scripts.js') }}"></script> 
</body>
</html>