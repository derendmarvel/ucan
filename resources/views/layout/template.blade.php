<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

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
            font-size: 50px;
        }

        .header{
            padding-left: 150px;
            padding-right: 150px;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .header-2{
            padding:110px;
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

        .video-background{
            background: url('/images/Video Background.jpg');
            background-size: cover;
            height: 100%;
        }

        .video-section{
            padding-left: 60px;
            padding-right: 60px;
            padding-top: 100px;
            padding-bottom: 100px;
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

        .btn-gradient {
            background: linear-gradient(to right, #b57e10, #FFDC37);
            border: 2px solid #b57e10;
            color: white;
            transition: border-color 0.5s;
        }

        .btn-gradient:hover {
            background: transparent;
            border-color: #FFDC37; 
        }

        .btn-white {
            background: transparent;
            border: 2px solid #ffffff;
            color: white;
            transition: border-color 1s;
        }

        .btn-white:hover {
            background: transparent;
            border-color: #FFDC37; 
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
            width: 300px;
            height: 380px;
            border-radius: 50%;
        }

        .swiper-slide img {
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
            width: 100%;
        }

        #swiper2 .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 500px;
            height: 500px;
        }

        #swiper2 .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
        }

        .line-style{
            margin-top: -100px;
        }

        .line-style-2{
            margin-bottom: -100px;
        }

        .star-line{
            top: 70px;
            max-width: 300px;
        }

        .ribbon-style{
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .x-button{
            top: 44px;
            right: 44px;
        }
    </style>

</head>
<body>
    <div>
        <nav class="navbar position-absolute w-100">
            <div class="container-fluid w-100">
                <div class = "d-flex justify-content-between align-items-center w-100 px-3 mt-3"> 
                    <a class="navbar-brand align-middle" href="/home">
                        <img src="/images/Home Icon.png" alt="Home" height = "30" width = "30" data-aos="fade-up" data-aos-duration="2000">
                    </a>
                    <a class="navbar-brand" href="https://www.ciputra.ac.id/bma/">
                        <img src="/images/Watermark.png" alt=" Watermark" height = "60" width = "162" data-aos="fade-up" data-aos-duration="2000">
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <img src="/images/Menu Icon.png" alt="Menu" height = "30" width = "30" data-aos="fade-up" data-aos-duration="2000">
                    </button>
                </div>
            </div>
            <div class="offcanvas offcanvas-end menu-background text-white px-5 py-5" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <button type="button" class="btn-close position-absolute x-button" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
                <div class="offcanvas-header">
                    <h1 class="offcanvas-title video-font pt-5" id="offcanvasNavbarLabel"> MENU</h1>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fs-5">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/info"> More Information </a>
                        </li>
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
                            <a class="nav-link text-white" href="/info#activity"> Activity </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "w-100">
            @yield('content')
        </div>

        <footer>
            <div class="w-100 align-items-center align-middle pt-3 pb-1 footer-gradient">
                <p class = "text-center"> Copyright © 2024 All Rights Reserved | Biro Mahasiswa Alumni Universitas Ciputra </p>
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

</body>
</html>