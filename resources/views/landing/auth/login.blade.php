@extends('landing.layout.main2')
@section('title', 'Login -')
@section('content')
<!-- login-section -->
<section class="login-section layout-radius">
    <div class="inner-container">
        <div class="right-box">
            <div class="form-sec">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign in</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Register</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="form-box">
                            @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mt-2">



                                <?php

                            $nomer = 1;

                            ?>

                                @foreach($errors->all() as $error)
                                <li>{{ $nomer++ }}. {{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <form action="/user/login" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form_boxes">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Email" />
                                </div>
                                <div class="form_boxes">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="btn-box">
                                    {{-- <label class="contain">Remember
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label> --}}
                                    <a href="/user/reset-password" class="pasword-btn">Forgotten password?</a>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Login <img src="images/arrow.svg" alt="" />
                                    </button>
                                </div>
                            </form>
                            <div class="btn-box-two">
                                <span>OR</span>
                                <div class="social-btns justify-content-center">
                                    {{-- <a href="#" class="fb-btn"><i class="fa-brands fa-facebook-f"></i>Continue Facebook</a> --}}
                                    <a href="/user/google/redirect" class="fb-btn two"><i class="fa-brands fa-google"></i>Continue Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="form-box two">
                            @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mt-2">



                                <?php

                            $nomer = 1;

                            ?>

                                @foreach($errors->all() as $error)
                                <li>{{ $nomer++ }}. {{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <form action="/user/register" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form_boxes">
                                    <label>Username</label>
                                    <input type="text" name="name" placeholder="Name" />
                                </div>
                                <div class="form_boxes">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="form_boxes">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="form_boxes">
                                    <label>Re-Password</label>
                                    <input type="password" name="repassword" placeholder="Password" />
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Login <img src="images/arrow.svg" alt="" />
                                    </button>
                                </div>

                            </form>
                            <div class="btn-box-two">
                                <span>OR</span>
                                <div class="social-btns justify-content-center">
                                    {{-- <a href="/user/redirect" class="fb-btn"><i class="fa-brands fa-facebook-f"></i>Continue Facebook</a> --}}
                                    <a href="/user/google/redirect" class="fb-btn two"><i class="fa-brands fa-google"></i>Continue Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End login-section -->
@endsection
