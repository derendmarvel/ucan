@extends('layout.template')

@section('title', 'UC Awading Night 2024')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid">
            <div class="row invitation-background header align-items-center align-middle">
                <div class="col-12 text-center mt-4">
                    <div class = "row justify-content-center">
                        <h1 class="header-font fs-3 mb-0" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250"> Universitas Ciputra's </h1>
                        <img src="/images/Awarding Night 2024.png" alt="Title" class = "text-center" style="max-width: 70%; margin: 0;" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                    </div>
                    <div class = "row justify-content-center">
                    @auth
                        <a class="btn btn-white w-50 py-3 px-5 fw-bold rounded-0 my-0" href = "{{ route('login') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "750"> VIEW INVITATION </a>
                    @else
                        <a class="btn btn-white w-25 py-3 px-5 fw-bold rounded-0 my-0" href = "{{ route('login') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "750">  REGISTER NOW  </a>
                    @endauth
                    </div>
                </div>
            </div>

            <div class = "row golden-background golden-section align-items-center align-middle">
                <div class = "col-4 px-5" data-aos="fade-up" data-aos-duration = "2000">
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
                <div class = "col-4 px-5" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay="250">
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
                <div class="col-4 px-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
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

            <div class = "row definition-background justify-content-center align-items-center align-middle header-2">
                <img class = "position-relative w-100 line-style" src = "/images/Line.png"> 
                <div class = "col py-5">
                    <div class = "row w-100 align-items-center align-middle" data-aos="fade-up" data-aos-duration = "2000">
                        <div class = "col-8">
                            <img src="/images/What is UCAN.png" alt="Text" style="max-width: 100%;">
                        </div>
                        <div class = "col-4 justify-content-end text-end">
                            <img src="/images/Bintang.png" alt="Bintang" style="max-width: 60%;">
                        </div>
                    </div>
                    <div class = "row w-100" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay="250">
                    <p class = "fw-light fs-5"> Universitas Ciputra Awarding Night 2024 merupakan ajang penghargaan yang diselenggarakan oleh Biro Mahasiswa Alumni (BMA) untuk setiap mahasiswa berprestasi dan organisasi kemahasiswaan di Universitas Ciputra Surabaya yang memiliki prestasi di bidang non akademik tingkat nasional dan internasional. </p>
                    </div>
                </div>
                <img class = "position-relative w-100 line-style-2" src = "/images/Line.png"> 
            </div>

            <div class = "row golden-background golden-section-2 justify-content-center align-items-center align-middle">
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

            <div class = "row video-background align-items-center align-middle">
                <div class = "col-md-4 justify-content-center" data-aos="fade-up" data-aos-duration = "2000">
                    <p class = "video-font video-section lh-1"> Relive Last Year’s Awarding Night! </p>
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

            <div class = "row golden-background">
                <div class = "col justify-content-center text-center align-items-center align-middle py-5">
                    @auth
                       <h1 class="video-font" data-aos = "fade-up" data-aos-duration = "2000"> MORE INFO </h1>
                        <a class="btn btn-white w-50 py-3 px-5 fw-bold rounded-0 my-0" href = "{{ route('info') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250"> VIEW DETAILS </a>
                    @else
                        <h1 class="video-font" data-aos = "fade-up" data-aos-duration = "2000"> REGISTER NOW </h1>
                        <a class="btn btn-white w-25 py-3 px-5 fw-bold rounded-0 my-0" href = "{{ route('login') }}" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250">  REGISTER NOW  </a>        
                    @endauth
                </div>
            </div>
            
            <div class = "row performers-background justify-content-center align-items-center align-middle header-2">
            <img class = "position-relative w-100 line-style" src = "/images/Line.png"> 
                <div class = "col text-center">
                    <img src="/images/Performers.png" alt="Text" style="max-width: 60%;" data-aos="fade-up" data-aos-duration = "2000"> 
                    <div class="swiper mySwiper mt-3" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/images/Performer-2.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-4 py-2 px-4 performer-name"> Resonance </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-1.jpg">
                                <div>
                                    <h1 class = "fw-bold fs-4 py-2 px-4 performer-name mt-2"> Big Dance Crew (BDC) </h1>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="/images/Performer-7.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-4 py-2 px-4 performer-name"> Taekwondo </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-4.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-4 py-2 px-4 performer-name"> Freya (Singing) </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-5.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-4 py-2 px-4 performer-name"> Charlotte Natasha (Dance) </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/Performer-6.jpg" />
                                <div>
                                    <h1 class = "fw-bold fs-4 py-2 px-4 performer-name"> Emma & Jacqueline (Violin) </h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div>
                        <img src="/images/GUESTS.png" alt="Title" style="margin-top: 150px; max-width: 40%;" data-aos="fade-up" data-aos-duration = "2000"> 
                        <img src="/images/Guestlist.png" style = "max-width: 90%; margin-top: 30px;" data-aos="fade-up" data-aos-duration = "2000" data-aos-delay = "250">
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
                    <div class = "row w-50 px-5 mx-auto mt-3 align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "250">
                        <p class="fs-4 text-center align-items-center align-middle"> <img src="/images/Contact-1.png" alt="Contact Icon" width= "40" height = "40" class = "text-end"> Line ID: nevilson </p>
                    </div>
                    <div class = "row w-50 px-5 mx-auto align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "2000" data-aos-delay = "500">
                        <p class="fs-4 text-center align-items-center align-middle"> <img src="/images/Contact-2.png" alt="Contact Icon" width= "40" height = "40" class = "text-end"> Whatsapp: 08113478882 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection