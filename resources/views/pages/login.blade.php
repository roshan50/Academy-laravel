@extends('layouts.default')
@section('content')
    <div class="main bg-login">

        <div class="container-fluid d-flex justify-content-center">
            <div class="container">
                <div class="banner-login__image d-flex justify-content-center">
                    <div class="col-10 col-md-8 col-lg-5">
                        <img class="" src="images/login-img.jpg" alt="">
                    </div>
                </div>

                <div class="login-pannel d-flex flex-column flex-lg-row justify-content-center">
                    <div class="login col-lg-5 d-flex flex-column align-items-center">
                        <h1 class="text-center">ورود به سامانه</h1>
                        <div class="d-flex input-div">
                            <div class="mdi mdi-cellphone-android input-mdi"></div>
                            <input type="text" class="input-style" placeholder="شماره همراه">
                        </div>
                        <div class="d-flex input-div">
                            <div class="mdi mdi-lock-outline input-mdi"></div>
                            <input type="text" class="input-style" placeholder="رمز عبور">
                        </div>
                        <div class="remember-me">
                            <input type="checkbox" class="login-checkbox">
                            <label for="" class="login-label">مرا بخاطر بسپار</label>
                        </div>
                        <button class="bg-secondary mdi mdi-account-key btn-login">ورود به سامانه</button>
                    </div>

                    <div class="col-lg-1 d-none d-lg-block">
                        <div class="d-flex justify-content-center"><div class="login-border-left"></div></div>
                        <div class="or text-center">یا</div>
                        <div class="d-flex justify-content-center"><div class="login-border-left"></div></div>
                    </div>

                    <div class="register col-lg-5  d-flex flex-column align-items-center">
                        <h1 class="text-center">ثبت نام در سامانه</h1>
                        <div class="d-flex input-div">
                            <div class="mdi mdi-account-outline input-mdi"></div>
                            <input type="text" class="input-style" placeholder="نام و نام خانوادگی">
                        </div>
                        <div class="d-flex input-div">
                            <div class="mdi mdi-cellphone-android input-mdi"></div>
                            <input type="text" class="input-style" placeholder="شماره همراه">
                        </div>
                        <div class="d-flex input-div">
                            <div class="mdi mdi-lock-outline input-mdi"></div>
                            <input type="text" class="input-style" placeholder="رمز عبور">
                        </div>
                        <div class="put-video">
                            <input type="checkbox" class="login-checkbox">
                            <label for="" class="login-label">تمایل دارم ویدئوهای آموزشی داخل سایت ثبت نمایم</label>
                        </div>
                        <button class="bg-primary mdi mdi-account-plus btn-login">ثبت نام در سامانه</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection