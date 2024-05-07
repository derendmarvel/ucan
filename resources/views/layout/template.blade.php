<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="icon" type="image/x-icon" href="/images/logo ucan final-01.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        html{
            scroll-behavior: smooth;
        }   

        body{
            font-family: 'Montserrat', sans-serif;
            color: white;
            text-shadow: 1px 1px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .header-font{
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .header-font-2{
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .countdown-font{
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 70px;
            margin-bottom: -20px;
        }

        .video-font{
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-size: 30px;
        }

        .footer-font{
            font-size: 12px;
        }

        .rundown-font-header{
            font-size: 24px;
        }

        .rundown-font{
            font-size: 20px;
        }

        .watermark-image{
            width: 100px;
        }

        .awarding-night-image{
            max-width: 100%;
        }

        .what{
            width: 260px;
        }

        .performers{
            width: 260px;
        }

        .guests{
            width: 160px;
            margin-top: 50px;
        }

        .guestlist{
            width: 100%;
        }

        .logo{
            width: 300px;
        }

        .rundown {
            width: 260px;
        }

        .dresscode{
            width: 350px;
        }

        .activity{
            width: 260px;
        }

        .icon-size{
            width: 50px;
        }
        
        .contact-icon{
            width: 24px;
        }

        .header{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 140px;
            padding-bottom: 140px;
        }

        .header-2{
            padding: 30px;
        }

        .header-3{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .header-info{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 170px;
            padding-bottom: 140px;
        }

        .font-signin{
            font-size: 16px;
        }

        .login-section{
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 130px;
            padding-bottom: 100px;
        }

        .invitation-background{
            background: url('/images/Background-Invitation.jpg');
            background-size: cover;
            height: 100%;
        }

        .definition-background{
            background: url('/images/Definition Background.jpg');
            background-size: cover;
            height: 100%;
        }

        .golden-background{
            background: url('/images/Golden Background.jpg');
            background-size: cover;
            height: 100%;
        }

        .golden-section{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .golden-section-2{
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .video-background{
            background: url('/images/Video Background.jpg');
            background-size: cover;
            height: 100%;
        }

        .video-section{
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 20px;
        }

        .video-section-2{
            height: 100%;
            padding: 0px;
            margin: 0px;
        }

        .player{
            aspect-ratio: 16/9;
            width: 100%;
        }

        .performers-background{
            background: url('/images/Guests Background.jpg');
            background-size: cover;
            height: 100%;
        }

        .btn-white {
            background: transparent;
            border: 2px solid;
            border-color: #ffffff;
            font-size: 14px;
            color: white;
            transition: border-color 0.2s, color 0.2;
        }

        .btn-white:hover {
            background: transparent;
            border-color: #FFDC37; 
            color: #FFDC37;
        }

        .menu-background{
            background: url('/images/Menu Bar.jpg');
            background-size: cover;
            height: 100%;
        }

        .info-background{
            background: url('/images/Long Background.jpg');
            background-size: cover;
            height: 100%;
        }

        .footer-gradient {
            background: linear-gradient(to right, #002D5E, #0078C2);
            border: none;
            color: white;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 400px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
        }

        #swiper1 .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        #swiper1 .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 380px;
            border-radius: 50%;
        }

        #swiper1 .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
        }

        .swiper-button-prev{
            color: white;
            opacity: 50%;
        }

        .swiper-button-next{
            color: white;
            opacity: 50%;
        }

        .performer-name {
            background-size: cover;
        }

        #swiper2 .swiper {
            width: 75%;
        }

        #swiper2 .swiper-slide {
            background-position: center;
            background-size: cover;
            height: 300px;
        }

        #swiper2 .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
        }

        .line-style{
            margin-top: -10px;
        }

        .line-style-2{
            margin-bottom: -10px;
        }

        .star-line{
            top: 20px;
            width: 100px;
        }

        .s-line{
            content: url('/images/Line 2.png');
            top: 10px;
            width: 50px;
        }

        .s-line-2{
            content: url('/images/Line 2.png');
            top: 100px;
            width: 50px;
        }

        .rotate-right{
            transform: rotate(90deg);
        }

        .rotate-left{
            transform: rotate(90deg);
        }

        .desc{
            font-size: 16px;
        }

        .x-button{
            top: 44px;
            right: 44px;
        }

        .page-link {
            font-size: 1rem; /* Adjust as needed, default Bootstrap is often 1rem */
            padding-left: 12px; /* Default padding for Bootstrap pagination links */
            padding-right: 12px;
            padding-top: 6px;
            padding-bottom: 6px;
        }

        .pagination-summary {
            color: white; /* Set text color to white */
        }

        @media (max-width: 767px) {
            .hide-on-mobile {
                display: none; /* Hide the columns */
            }
        }
        
        @media only screen and (min-width:1080px){
            .header{
                padding-left: 150px;
                padding-right: 150px;
                padding-top: 100px;
                padding-bottom: 100px;
            }
            .header-2{
                padding:110px;
            }   
            .header-3{
                padding-left: 150px;
                padding-right: 150px;
                padding-top: 70px;
                padding-bottom: 70px;
            }
            .header-info{
                padding: 120px;
            }
            .video-font{
                font-family: "Montserrat", sans-serif;
                font-weight: 700;
                font-size: 50px;
            }
            .footer-font{
                font-size: 16px;
            }
            .rundown-font-header{
                font-size: 40px;
            }
            .rundown-font{
                font-size: 20px;
            }
            .video-section{
                padding-left: 60px;
                padding-right: 60px;
                padding-top: 100px;
                padding-bottom: 100px;
            }
            .login-section{
                padding-left: 180px;
                padding-right: 180px;
                padding-top: 130px;
                padding-bottom: 100px;
            }
            .watermark-image{
                width: 160px;
            }
            .awarding-night-image{
                max-width: 70%;
            }
            .what{
                width: 550px;
            }
            .performers{
                width: 600px;
            }
            .guests{
                width: 400px;
                margin-top: 150px;
            }
            .guestlist{
                width: 90%;
            }
            .logo{
                width: 700px;
            }
            .rundown {
                width: 460px;
            }
            .dresscode{
                width: 540px;
            }
            .activity{
                width: 500px;
            }
            .icon-size{
                width: 90px;
            }
            .contact-icon{
                width: 40px;
            }
            .btn-white {
                background: transparent;
                border: 2px solid;
                border-color: #ffffff;
                font-size: 16px;
                color: white;
                transition: border-color 0.2s, color 0.2;
            }
            .btn-white:hover {
                background: transparent;
                border-color: #FFDC37; 
                color: #FFDC37;
            }
            .font-signin{
                font-size: 20px;
            }
            .golden-section{
                padding-left: 80px;
                padding-right: 80px;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .golden-section-2{
                padding-left: 230px;
                padding-right: 230px;
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .line-style{
                margin-top: -100px;
            }

            .line-style-2{
                margin-bottom: -100px;
            }
            .star-line{
                top: 70px;
                width: 300px;
            }
            .s-line{
                content: url('/images/Line 1.png');
            }
            .s-line-2{
                content: url('/images/Line 1.png');
            }
            .rotate-right{
                transform: rotate(14deg);
            }
            .rotate-left{
                transform: rotate(-14deg);
            }
            .desc{
                font-size: 20px;
            }
            #swiper2 .swiper {
                width: 45%;
            }

            #swiper2 .swiper-slide {
                background-position: center;
                background-size: cover;
                height: 520px;
            }

            #swiper2 .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
            }
            
        }
    </style>

</head>
<body>
    <div>
        <nav class="navbar position-absolute w-100">
            <div class="container-fluid w-100">
                <div class = "d-flex justify-content-between align-items-center w-100 px-3 mt-3">
                    @auth
                        @if (Auth::user()->isGuest() || Auth::user()->isVIP())
                            <a class="navbar-brand align-middle" href="/">
                                <img src="/images/Home Icon.png" alt="Home" height = "30" width = "30" data-aos="fade-up" data-aos-duration="2000">
                            </a>
                        @elseif (Auth::user()->isAdmin())
                            <a class="navbar-brand align-middle" href="/guestlist">
                                <img src="/images/check-circle.png" alt="Gueslist" height = "30" width = "30" data-aos="fade-up" data-aos-duration="2000">
                            </a>
                        @endif
                    @endauth

                    @guest
                        <a class="navbar-brand align-middle" href="/">
                            <img src="/images/Home Icon.png" alt="Home" height = "30" width = "30" data-aos="fade-up" data-aos-duration="2000">
                        </a>
                    @endguest
                    <a class="navbar-brand" href="https://www.ciputra.ac.id/bma/">
                        <img src="/images/Watermark.png" class = "watermark-image ms-4 ms-md-5" alt = "Watermark" data-aos="fade-up" data-aos-duration="2000">
                    </a>
                    @auth
                        @if (Auth::user()->isGuest() || Auth::user()->isVIP())
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <img src="/images/Menu Icon.png" alt="Menu" height = "30" width = "30" data-aos="fade-up" data-aos-duration="2000">
                        </button>
                        @else
                            <a class="nav-link text-white font-signin" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" data-aos="fade-up" data-aos-duration="2000">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    @endauth
                    @guest
                        @if (Route::has('login'))
                            <a class="nav-link font-signin" href="/login" data-aos="fade-up" data-aos-duration="2000"> Register </a>
                        @endif
                    @endguest
                </div>
            </div>
            <div class="offcanvas offcanvas-end menu-background text-white px-5 py-5" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <button type="button" class="btn-close position-absolute x-button" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
                <div class="offcanvas-header">
                    <h1 class="offcanvas-title video-font pt-2" id="offcanvasNavbarLabel"> MENU</h1>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fs-5">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                        </li>
                        @auth
                        @if (Auth::user()->isGuest())
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/info"> More Information </a>
                        </li>
                        @elseif (Auth::user()->isVIP())
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/infovip"> More Information </a>
                        </li>
                        @endif
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/info#rundown"> Rundown </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/info#dateloc"> Date & Location </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/info#dresscode"> Dresscode Reference </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/info#swiper2"> Activity </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "w-100">
            @yield('content')
        </div>

        <footer>
            <div class="w-100 align-items-center align-middle pt-3 pb-1 px-4 footer-gradient footer-font">
                <p class = "text-center"> Copyright © 2024 All Rights Reserved | Student Affair Universitas Ciputra </p>
            </div>
        </footer>
    </div>

    <script>
        AOS.init();
    </script>  

    <script>
        var countDownDate = new Date("Jun 05, 2024 00:00:00").getTime();
        var x = setInterval(function(){
            var now = new Date().getTime();
            var distance = countDownDate - now;
            
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60 )) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            if (distance < 0){
                clearInterval(x);
                document.getElementById("days").innerHTML = "00";
                document.getElementById("hours").innerHTML = "00";
                document.getElementById("minutes").innerHTML = "00";
                document.getElementById("seconds").innerHTML = "00";
            }

        }, 1000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 1500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 1500,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>