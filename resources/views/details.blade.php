@extends('layout.template')

@section('title', 'UC Awading Night 2024')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid info-background">
            <div class="row header align-items-center align-middle">
                <div class="col-12 text-center mt-3">
                    <img src="/images/UCAN LOGO-OLD.png" alt="Title" style="max-width: 70%;" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                    <h1 class="header-font fs-2 mt-2" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "500"> INFORMATION </h1>
                </div>
            </div>

            <div class = "row golden-section align-items-center align-middle" id = "dateloc">
                <div class = "col">
                    <h1 class = "header-font fs-1 text-center py-2" data-aos="fade-up" data-aos-duration = "2000"> DATE & LOCATION </h1>
                    <div class = "row">
                        <div class = "col-4 px-5" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                            <div class = "row">
                                <div class = "col-5">
                                    <img src = "/images/Calendar.png" height = "90" width = "90">
                                </div>
                                <div class = "col-7">
                                    <h2 class = "fw-bold fs-1"> 5 June </h2>
                                    <h3 class = "fw-light fs-3"> 2023 </h3>
                                </div>
                            </div>
                        </div>
                        <div class = "col-4 px-5" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay="1000">
                            <div class = "row">
                                <div class = "col-5">
                                    <img src = "/images/Clock.png" height = "90" width = "90">
                                </div>
                                <div class = "col-7">
                                    <h2 class = "fw-bold fs-1"> 17.00 </h2>
                                    <h3 class = "fw-light fs-3"> until 21.00 </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 px-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1500">
                            <div class="row justify-content-end"> 
                                <div class="col-5">
                                    <img src="/images/Gazebo.png" class="text-end" height="90" width="90">
                                </div>
                                <div class="col-7 text-start">
                                    <h2 class="fw-bold fs-1">DIAN</h2>
                                    <h3 class="fw-light fs-3">Auditorium</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row justify-content-center align-items-center align-middle header">
                <div class = "col py-4">
                    <div class = "row w-100 justify-content-center align-items-center align-middle text-center mb-5" data-aos="fade-up" data-aos-duration = "2000" id = "rundown">
                        <img src="/images/Rundown.png" alt="Text" style="max-width: 50%;">
                    </div>
                    <div class = "row w-100 mt-5">
                        <div class="col w-100 text-center">
                            <div class = "row justify-content-start">
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 17.00 - 17.30 </h2>
                                    <h3 class="fw-light fs-4"> Open Registration </h3>
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(14deg);">
                                </div>
                            </div>
                            
                            <div class = "row justify-content-end">
                                <div class = "col-4">
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(-14deg);">
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 17.30 - 17.45 </h2>
                                    <h3 class="fw-light fs-4"> Opening </h3>
                                </div>
                                
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 17.45 - 18.00 </h2>
                                    <h3 class="fw-light fs-4"> Special Performance 1 </h3>
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(14deg);">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-4">
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(-14deg);">
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 18.00 - 19.00 </h2>
                                    <h3 class="fw-light fs-4"> Awarding 1 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 19.00 - 19.15 </h2>
                                    <h3 class="fw-light fs-4"> Special Performance 2 </h3>
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(14deg);">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-4">
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(-14deg);">
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 19.15 - 20.15 </h2>
                                    <h3 class="fw-light fs-4"> Awarding 2 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 20.15 - 20.30 </h2>
                                    <h3 class="fw-light fs-4"> Special Performance 2 </h3>
                                </div>
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img src = "/images/Line 1.png" class = "position-relative star-line" style = "transform: rotate(14deg);">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold fs-1"> 20.30 - 21.00 </h2>
                                    <h3 class="fw-light fs-4"> Closing </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row golden-section-2 justify-content-center align-items-center align-middle" id = "dresscode">
                <div class = "col">
                    <div class = "row w-100 justify-content-center align-items-center align-middle text-center mb-5" data-aos="fade-up" data-aos-duration = "2000">
                        <img src="/images/Dresscode.png" alt="Text" style="max-width: 80%;">
                    </div>
                    <div class = "row text-center">
                        <h1 class = "header-font-2 fs-2" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250"> Main Dresscode </h1>
                        <div class="swiper mySwiper py-3" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/images/Blue Suit.png">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/Blue Dress.png" />
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <h1 class = "header-font fs-4" data-aos="fade-up" data-aos-duration = "2000"> Navy Blue Suit/Dress </h1>
                    </div>
                    <div class = "row text-center pt-5">
                        <h1 class = "header-font-2 fs-2" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250"> Shirt, Pants, Shoes </h1>
                        <div class="swiper mySwiper py-3" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/images/Black Shirt.png">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/Cream Shirt.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/White Shirt.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/Black Pants.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/Cream Pants.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/White Pants.png" />
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <h1 class = "header-font fs-4" data-aos="fade-up" data-aos-duration = "2000"> Cream/White/Black </h1>
                    </div>
                    <div class = "row text-center py-5">
                        <h1 class = "header-font-2 fs-2" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250"> Accessories </h1>
                        <div class="swiper mySwiper py-3" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/images/Gold Watch.png">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/images/Gold Necklace.png" />
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <h1 class = "header-font fs-4" data-aos="fade-up" data-aos-duration = "2000"> Gold-Colored Accessories </h1>
                    </div>
                </div>
            </div> 

            <!-- <div class = "row golden-background">
                <div class = "col justify-content-center text-center align-items-center align-middle py-5">
                    <h1 class="video-font" data-aos = "fade-up" data-aos-duration = "2000"> FAQ </h1>
                    <div class="row w-100 mt-3">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"> What is the dresscode? </a>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"> Toggle first element </a>
                    </div>
                    <div class="row w-100">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class = "row header justify-content-center align-items-center align-middle" id = "swiper2">
                <img src="/images/Activity.png" class = "w-100  text-center" alt="Text" style="max-width: 50%;" data-aos="fade-up" data-aos-duration = "2000">
                <div class="swiper mySwiper2" id = "activity" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <img src="/images/Activity-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/Activity-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/Activity-3.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
@endsection