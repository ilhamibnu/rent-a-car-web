@extends('landing.layout.main2')
@section('title', 'Profil -')
@section('content')
<!-- login-section -->
<section class="login-section layout-radius">
    <div class="inner-container">
        <div class="right-box">
            <div class="form-sec">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profil</button>
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
                            <form action="/user/update-profil" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form_boxes">
                                    <label>Name</label>
                                    <input readonly type="text" value="{{ Auth::user()->name }}" name="name" placeholder="Name" />
                                </div>
                                <div class="form_boxes">
                                    <label>Email</label>
                                    <input readonly type="text" value="{{ Auth::user()->email }}" name="email" placeholder="Email" />
                                </div>

                                @if(Auth::user()->google == '1')

                                @else
                                <div class="form_boxes">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="form_boxes">
                                    <label>Password</label>
                                    <input type="password" name="repassword" placeholder="Password" />
                                </div>


                                @endif

                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Update <img src="images/arrow.svg" alt="" />
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End login-section -->
@endsection
