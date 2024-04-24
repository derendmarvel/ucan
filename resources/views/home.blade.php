@extends('layout.template')

@section('title', 'UC Awading Night 2024')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid">
            <div class="row invitation-background header align-items-center align-middle">
                <div class="col-12 text-center mt-4">
                    <div class = "row justify-content-center">
                        <h1 class="header-font fs-3 fs-sm-5 mb-3 mb-md-0" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250"> Universitas Ciputra's </h1>
                        <img src="/images/Awarding Night 2024.png" alt="Title" class = "text-center awarding-night-image" style="margin: 0;" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                    </div>
                    <div class = "row justify-content-center">
                    @auth
                        <a class="btn btn-white w-50 py-3 px-2 px-md-5 fw-bold rounded-0 my-3 my-md-0" href = "{{ route('info') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "750"> MORE INFO </a>
                    @else
                        <a class="btn btn-white w-50 py-3 px-2 px-md-5 fw-bold rounded-0 my-3 my-md-0" href = "{{ route('login') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "750">  REGISTER NOW  </a>
                    @endauth
                    </div>
                </div>
            </div>

            <div class="row golden-background golden-section align-items-center shadow-lg">
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


            <div class="row definition-background justify-content-center align-items-center header-2">
                <img class="position-relative w-100 line-style" src="/images/Line.png">
                <div class="col-12 pt-5 pb-4 pb-md-5">
                    <!-- Check alignment classes and column sizing -->
                    <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-12 col-md-8 text-center text-md-start">
                        <!-- Align the image to the center for small screens -->
                        <img src="/images/What is UCAN.png" alt="Text" class="what">
                    </div>
                    <div class="col-4 text-end d-none d-md-block">
                        <img src="/images/Bintang.png" alt="Bintang" style="max-width: 60%;">
                    </div>
                    </div>
                    <div class="row justify-content-center mt-4 mt-md-0" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="250">
                    <div class="col-12">
                        <!-- Use text-center to align content on small screens -->
                        <p class="fw-light desc text-center text-md-start">
                            Universitas Ciputra Awarding Night 2024 merupakan ajang penghargaan yang diselenggarakan oleh Biro Mahasiswa Alumni (BMA) untuk setiap mahasiswa berprestasi dan organisasi kemahasiswaan di Universitas Ciputra Surabaya yang memiliki prestasi di bidang non-akademik tingkat nasional dan internasional.
                        </p>
                    </div>
                    </div>
                </div>
                <img class="position-relative w-100 line-style-2" src="/images/Line.png">
                </div>


            <div class = "row golden-background golden-section-2 justify-content-center align-items-center align-middle shadow-lg">
                <div class = "col" data-aos="fade-up" data-aos-duration = "2000">
                    <p id = "days" class = "fw-bold text-center countdown-font"> 00 </p>
                    <p class = "text-center fs-2"> Days </p>
                </div>
                <div class = "col" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                    <p id = "hours" class = "fw-bold text-center countdown-font"> 00 </p>
                    <p class = "text-center fs-2"> Hours </p>
                </div>
                <div class = "col" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                    <p id = "minutes" class = "fw-bold text-center countdown-font"> 00 </p>
                    <p class = "text-center fs-2"> Minutes </p>
                </div>
                <div class = "col" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "750">
                    <p id = "seconds" class = "fw-bold text-center countdown-font"> 00 </p>
                    <p class = "text-center fs-2"> Seconds </p>
                </div>
            </div> 

            <div class = "row video-background align-items-center align-middle py-5 py-md-0">
                <div class = "col-md-4 justify-content-center" data-aos="fade-up" data-aos-duration = "2000">
                    <p class = "video-font video-section lh-1 text-center text-md-start"> Relive Last Year’s Awarding Night! </p>
                </div>
                <div class = "col-md-8" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                    <iframe class = "player" 
                        src="https://www.youtube.com/embed/Kkj0W4Oppj8?si=stoPjG979mjYHS6e" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class = "row golden-background shadow-lg">
                <div class = "col justify-content-center text-center align-items-center align-middle py-5">
                    @auth
                       <h1 class="video-font" data-aos = "fade-up" data-aos-duration = "2000"> GET INVITATION </h1>
                        <a class="btn btn-white w-50 py-3 px-3 fw-bold rounded-0 my-0 text-center" href = "{{ route('download') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250"> DOWNLOAD INVITATION </a>
                    @else
                        <h1 class="video-font" data-aos = "fade-up" data-aos-duration = "2000"> REGISTER NOW </h1>
                        <a class="btn btn-white w-50 py-3 px-3 px-md-5 fw-bold rounded-0 my-0" href = "{{ route('login') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250">  REGISTER NOW  </a>        
                    @endauth
                </div>
            </div>
            
            <div class = "row performers-background justify-content-center align-items-center align-middle header-2">
            <img class = "position-relative w-100 line-style" src = "/images/Line.png"> 
                <div class = "col text-center">
                    <img src="/images/Performers.png" alt="Text" class = "performers mt-3 mt-md-0" data-aos="fade-up" data-aos-duration = "2000"> 
                    <div class="swiper mySwiper mt-1 mt-md-3" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href = "https://www.instagram.com/resonance-world/"><img src="/images/Performer-2.jpg"/> </a>
                                <div>
                                    <h1 class = "fw-bold fs-5 fs-md-4 py-2 px-4 performer-name"> Resonance </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-1.jpg">
                                <div>
                                    <h1 class = "fw-bold fs-5 fs-md-4 py-2 px-4 performer-name mt-2"> Big Dance Crew (BDC) </h1>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="/images/Performer-7.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-5 fs-md-4 py-2 px-4 performer-name"> Taekwondo </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-4.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-5 fs-md-4 py-2 px-4 performer-name"> Freya </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-5.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-5 fs-md-4 py-2 px-4 performer-name"> Laetitia Charleene </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-6.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-5 fs-md-4 py-2 px-4 performer-name"> Emma & Jacqueline </h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div>
                        <img src="/images/GUESTS.png" alt="Title" class = "guests" data-aos="fade-up" data-aos-duration = "2000"> 
                        <img src="/images/Guestlist.png" class = "guestlist mt-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                    </div>
                </div>
                <!-- <img src="/images/Ribbon.png" alt="Divider" class = "w-100 m-0 position-absolute ribbon-style"> -->
                <img class = "position-relative w-100 line-style-2" src = "/images/Line.png"> 
            </div>

            <div class = "row golden-background">
                <div class = "col justify-content-center text-center align-items-center align-middle pt-5 pb-4">
                    <div class = "row">
                        <h1 class="video-font" data-aos = "fade-up" data-aos-duration = "2000"> CONTACT PERSON </h1>
                    </div>
                    <div class = "row w-100 px-5 mx-auto mt-3 align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                        <p class="fs-4 text-center align-items-center align-middle"> <img src="/images/Contact-1.png" alt="Contact Icon" class = "text-end contact-icon"> Line ID: nevilson </p>
                    </div>
                    <div class = "row w-100 px-5 mx-auto align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                        <p class="fs-4 text-center align-items-center align-middle"> <img src="/images/Contact-2.png" alt="Contact Icon" class = "text-end contact-icon"> Whatsapp: 08113478882 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection