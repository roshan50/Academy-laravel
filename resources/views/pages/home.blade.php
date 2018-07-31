@extends('layouts.default')
@section('content')
       <div class="container-fluid bg-primary">
        <div class="container">
            <div class="banner d-flex justify-content-center">
                <div class="d-flex row flex-column flex-lg-row justify-content-center">
                    <div class="banner__image pb-0 pb-lg-5">
                        <img class=" pb-0 pb-lg-4" src="images/banner.jpg" alt="">
                    </div>
                    <div class="banner__context d-flex flex-row mt-3 mt-lg-5 pt-0 pt-lg-5">
                        <div class="banner__sign">
                            <img src={{  URL::asset('images/cama.png') }} alt="">
                        </div>
                        <div class="banner__text">
                            <div>افتخار ما</div>
                            <div>اصالت و کیفیت کم نظیری است که</div>
                            <div>برای شما به ارمغان آورده ایم...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-none d-lg-block">
        <div class="row search-wrapper justify-content-center">
            <div class="col-12 search-box">
                <div class="search">
                    <div class="search__icon  mdi mdi-magnify"></div>
                    <input class="search__input" type="text" placeholder="دوره مورد نظر خود را برای جستجو وارد نمایید...">
                    <button class="btn-search">جستجو</button>
                </div>
                <div class="tag-box d-flex">
                    <div class="tag__title">دوره های محبوب</div>
                    <ul class="tags d-flex">
                        <li class="badge badge-primary">CSS</li>
                        <li class="badge badge-secondary">Java</li>
                        <li class="badge badge-info">HTML</li>
                        <li class="badge badge-warning">Bootstrap</li>
                        <li class="badge badge-success">Fundation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container mr-t-30">
            <div class="row new-course">
                <div class="title d-flex mr-b-20">
                    <div class="title__icon">
                        <img src="images/new.png" alt="">
                    </div>
                    <div class="title__body">
                        <h1>دوره های جدید</h1>
                        <div class="text">دوره های جدیدی که برایتان تدارک دیدیم را میتوانید اینجا ببینید و استفاده کنید</div>
                    </div>
                </div>
                <div class="content d-flex flex-wrap flex-lg-nowrap justify-content-lg-between">
                    <div class="p-2 w-sm-100 w-md-50 w-lg-25">
                        @include('module.card')
                    </div>
                    <div class="p-2 w-sm-100 w-md-50 w-lg-25">
                        @include('module.card')
                    </div>
                    <div class="p-2 w-sm-100 w-md-50 w-lg-25">
                        @include('module.card')
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="d-flex justify-content-between mr-b-20 mr-t-40">
                    <div class="title d-flex">
                        <div class="title__icon">
                            <img src="images/category.png" alt="">
                        </div>
                        <div class="title__body">
                            <h1>دسته بندی</h1>
                            <div class="text">شما میتوانید دوره آموزشی خود را از دسته بندی زیر انتخاب کنید</div>
                        </div>
                    </div>
                    <div class="arrows d-flex">
                        <div class="arrow-right mdi mdi-arrow-right-drop-circle-outline pointer"></div>
                        <div class="arrow-left mdi mdi-arrow-left-drop-circle-outline pointer"></div>
                    </div>
                </div>
                <div class="main-carousel  content" data-flickity='{ "cellAlign": "left", "contain": true }'>
                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                    <div class="cat--card carousel-cell">
                        @include('module.cat-card')
                    </div>

                </div>
            </div>
            <div class="row update-course">
                <div class="title d-flex mr-b-20 mr-t-40">
                    <div class="title__icon">
                        <img src="images/update.png" alt="">
                    </div>
                    <div class="title__body">
                        <h1>دوره های بروز شده</h1>
                        <div class="text">قسمت های جدید و تکمیلی دوره های قبلی رو  که براتون تدارک دیدیم، میتونید از اینجا ببینید و استفاده کنید.</div>
                    </div>
                </div>
                <div class="content d-flex flex-wrap flex-lg-nowrap justify-content-lg-between">
                    <div class="p-2">
                        @include('module.card')
                    </div>
                    <div class="p-2">
                        @include('module.card')
                    </div>
                    <div class="p-2">
                        @include('module.card')
                    </div>
                </div>
            </div>


            <div class="footer">
                <div class="footer__top d-flex">
                    <div class="br-b-just mr-l-20"></div>
                    <div class="brand">
                        <img src="images/brand.png" alt="">
                    </div>
                    <div class="br-b-just mr-r-20"></div>
                </div>

                <div class="footer__context d-lg-flex br-b">
                    <div class="col-lg-6 col-md-12 footer__text">
                        طرح‌نما یا لورم ایپسوم به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به‌عنوان عنصری از ترکیب‌بندی برای پُر کردن صفحه و ارائهٔ اولیهٔ شکل ظاهری و کلیِ طرح سفارش‌گرفته‌شده استفاده می‌کند، تا ازنظر گرافیکی نشانگر چگونگی نوع و اندازهٔ قلم و ظاهرِ متن باشد.
                        معمولاً طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفاً به مشتری یا صاحب‌کار خود نشان دهند که صفحهٔ طراحی یا صفحه‌بندی شده.گیرد، چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است.
                        تا ازنظر گرافیکی نشانگر چگونگی نوع و اندازهٔ قلم و ظاهرِ متن باشد.
                    </div>
                    <div class="col-lg-2 d-none d-lg-block footer__menu">
                        <ul class="bottom-menu list-unstyled">
                            <li class="my-list-group-item mdi mdi-chevron-left">
                                <a href="#">
                                    صفحه نخست
                                </a>
                            </li>
                            <li class="my-list-group-item mdi mdi-chevron-left">
                                <a href="">
                                    دوره های آموزشی
                                </a>
                            </li>
                            <li class="my-list-group-item mdi mdi-chevron-left">
                                <a href="#">
                                    انجمن تخصصی
                                </a>
                            </li>
                            <li class="my-list-group-item mdi mdi-chevron-left">
                                <a href="">
                                    درباره ما
                                </a>
                            </li>
                            <li class="my-list-group-item mdi mdi-chevron-left">
                                <a href="">
                                    تماس با ما
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 footer__info">
                        <div class="contacts d-flex flex-row">
                            <ul class="contact d-none d-lg-block list-unstyled">
                                <li class="my-list-group-item mdi mdi-email">info@academy.com</li>
                                <li class="my-list-group-item mdi mdi-phone">025-32855654</li>
                                <li class="my-list-group-item mdi mdi-cellphone">09123456789</li>
                            </ul>
                            <ul class="social flex-nowrap flex-lg-wrap list-unstyled">
                                <li class="my-list-group-item mdi mdi-telegram"></li>
                                <li class="my-list-group-item mdi mdi-instagram"></li>
                                <li class="my-list-group-item mdi mdi-google-plus"></li>
                                <li class="my-list-group-item mdi mdi-facebook"></li>
                                <li class="my-list-group-item mdi mdi-twitter"></li>
                            </ul>
                        </div>
                        <ul class="payment d-flex justify-content-around flex-row-reverse list-unstyled">
                            <li><img src="images/resaneh.jpg" alt=""></li>
                            <li><img src="images/nemad.png" alt=""></li>
                            <li class="d-flex align-items-center"><img src="images/payment.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop