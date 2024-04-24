@extends('layout.template')

@section('title', 'UC Awading Night 2024')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid info-background">
            <div class="row header-info align-items-center align-middle">
                <div class="col-12 text-center mt-5">
                    <img src="/images/ucan white.png" alt="Title" class = "logo" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                    <a class="btn btn-white w-50 py-3 px-2 px-md-5 fw-bold rounded-0 my-3 my-md-2" href = "{{ route('download') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "750"> GET INVITATION </a>
                </div>
            </div>

            <div class = "row golden-section align-items-center align-middle" id = "dateloc">
                <div class = "col">
                    <h1 class = "header-font fs-1 text-center py-2" data-aos="fade-up" data-aos-duration = "2000"> DATE & LOCATION </h1>
                    <div class = "row">
                        <div class="col-12 col-md-4 px-5 py-1" data-aos="fade-up" data-aos-duration="2000">
                            <div class="row">
                                <div class="col-5">
                                    <img src="/images/Calendar.png" class="icon-size">
                                </div>
                                <div class="col-7">
                                    <h2 class="fw-bold fs-1">5 June</h2>
                                    <h3 class="fw-light fs-3">2023</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 px-5 py-1" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="250">
                            <div class="row">
                                <div class="col-5">
                                    <img src="/images/Clock.png" class="icon-size">
                                </div>
                                <div class="col-7">
                                    <h2 class="fw-bold fs-1">17.00</h2>
                                    <h3 class="fw-light fs-3">until 21.00</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 px-5 py-1" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                            <div class="row justify-content-end">
                            <div class="col-5">
                                <img src="/images/Gazebo.png" class="icon-size">
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
                <div class = "col py-4" id = "rundown">
                    <div class = "row justify-content-center align-items-center align-middle text-center mb-5" data-aos="fade-up" data-aos-duration = "2000">
                        <img src="/images/Rundown.png" alt="Text" class = "rundown">
                    </div>
                    <div class = "row mt-5">
                        <div class="col w-100 text-center">
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 16.30 - 17.20 </h2>
                                    <h3 class="fw-light rundown-font"> Open Registration </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 17.20 - 17.30 </h2>
                                    <h3 class="fw-light rundown-font"> Performance "Freya" </h3>
                                </div>
                                
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 17.30 - 17.55 </h2>
                                    <h3 class="fw-light rundown-font"> Opening </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 17.55 - 18.25 </h2>
                                    <h3 class="fw-light rundown-font"> Awarding Session 1-4 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 18.25 - 18.30 </h2>
                                    <h3 class="fw-light rundown-font"> Performance "Violin + Piano" </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 18.30 - 18.56 </h2>
                                    <h3 class="fw-light rundown-font"> Awarding Session 5-8 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 18.56 - 19.02 </h2>
                                    <h3 class="fw-light rundown-font"> Performance "Taekwondo" </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 19.02 - 19.32 </h2>
                                    <h3 class="fw-light rundown-font"> Awarding Session 9-12 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 19.32 - 19.37 </h2>
                                    <h3 class="fw-light rundown-font"> Performance "BMA" </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 19.37 - 20.07 </h2>
                                    <h3 class="fw-light rundown-font"> Awarding Session 13-15 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 20.07 - 20.10 </h2>
                                    <h3 class="fw-light rundown-font"> Performance "Dance by Charleene" </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 20.10 - 20.32 </h2>
                                    <h3 class="fw-light rundown-font"> Awarding Session 16-17 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 20.32 - 20.37 </h2>
                                    <h3 class="fw-light rundown-font"> Performance "BDC" </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end">
                                <div class = "col-md-4">
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line-2 position-relative star-line rotate-left">
                                </div>
                                <div class = "col-12 col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 20.37 - 20.43 </h2>
                                    <h3 class="fw-light rundown-font"> Awarding Session 18 </h3>
                                </div>
                            </div>
                            <div class = "row justify-content-start">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 20.43 - 20.48 </h2>
                                    <h3 class="fw-light rundown-font"> Closing </h3>
                                </div>
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                                    <img class = "s-line position-relative star-line rotate-right">
                                </div>
                            </div>
                            <div class = "row justify-content-end mt-4 mt-md-0">
                                <div class = "col-12 col-md-4" data-aos="fade-up" data-aos-duration = "2000"  data-aos-delay = "250"> 
                                    <h2 class="fw-bold rundown-font-header"> 20.48 - 21.03 </h2>
                                    <h3 class="fw-light rundown-font"> Closing Performance "Resonance" </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row golden-section-2 justify-content-center align-items-center align-middle" id = "swiper1">
                <div class = "col" id = "dresscode">
                    <div class = "row justify-content-center align-items-center align-middle text-center mb-5" data-aos="fade-up" data-aos-duration = "2000">
                        <img src="/images/Dresscode.png" alt="Text" class = "text-center dresscode">
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

            <div class = "row header-3 justify-content-center align-items-center align-middle" id = "swiper2">
                <img src="/images/Activity.png" class = "text-center activity" alt="Text" data-aos="fade-up" data-aos-duration = "2000">
                <div class="swiper mySwiper2" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
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