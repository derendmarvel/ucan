@extends('layout.template')

@section('title', 'Login')

@section('content')
<div class="w-100 h-100 m-0">
    <div class="container-fluid h-100">
        <div class="row invitation-background login-section align-items-center align-middle">
            <div class="col-md-6 mt-2">
                <div class="row" data-aos="fade-right" data-aos-duration="2000"> 
                    <!-- Content for the left column (Sign In form) -->
                    <div class="card-header mb-1 text-center">
                        <img src="/images/Sign In.png" style="max-width: 54%;">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/signin">
                            @method('post')
                            @csrf

                            <!-- Form Fields -->
                            <div class="row mb-1">
                                <label for="name" class="col-md-12 col-form-label fs-5">{{ __('Full Name') }}</label>
                            </div>
                            <div class="row mb-1">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-1">
                                <label for="email" class="col-md-12 col-form-label fs-5">{{ __('UC Email Address') }}</label>
                            </div>
                            <div class="row mb-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-1">
                                <label for="nim" class="col-md-4 col-form-label fs-5">{{ __('NIM/NIK') }}</label>
                            </div>

                            <div class="row mb-4">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" required>
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-3">
                                <button type="submit" class="btn btn-white py-3 px-5 fw-bold rounded-0">
                                    {{ __('REGISTER') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 d-flex align-items-end flex-column d-none d-md-flex" data-aos="fade-left" data-aos-duration="2000">
                <img src="/images/Book1.png" class="img-fluid" alt="Book" style="max-width: 85%;">
            </div>
        </div>
    </div>
</div>

@endsection
