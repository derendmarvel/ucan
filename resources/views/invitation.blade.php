@extends('layout.template')

@section('title', 'UC Awading Night 2024')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid">
            <div class="row invitation-background header align-items-center">
                <div class="col-md-6 mt-5" data-aos="fade-right" data-aos-duration="2000" data-aos-delay = "250">
                    <h1 class="header-font-2 fs-4">YOU HAVE BEEN INVITED TO </h1>
                    <img src="/images/UCAN LOGO-OLD.png" class="img-fluid" alt="UCAN LOGO" style="max-width: 100%;">
                    <a class="btn btn-gradient mt-4 py-3 px-5 fw-bold rounded-0" href = "/home"> VIEW INVITATION </a>
                </div>
                <div class="col-md-6 d-flex align-items-end flex-column" data-aos="fade-left" data-aos-duration="2000">
                    <img src="/images/Book1.png" class="img-fluid" alt="Book" style="max-width: 85%;">
                </div>
            </div>
        </div>
    </div>
@endsection