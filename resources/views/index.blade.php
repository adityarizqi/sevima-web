@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">
                <div class="pogoSlider-slide" style="background-image:url(assets/web/images/banner_img.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide_text">
                                    <h3><span span class="theme_color">Kamu harus tau satu hal</span><br>Mencari Guru itu Mudah</h3>
                                    <h4>Temukan gurumu sekarang!</h4>
                                    <br>
                                    <div class="full center">
                                        <a class="contact_bt" href="courses.html">Mulai</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section tabbar_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab_menu">
                    <ul>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i1.png')}}"
                                        alt="#" /></span><span>University Life</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i2.png')}}"
                                        alt="#" /></span><span>Graduation</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i3.png')}}"
                                        alt="#" /></span><span>Athletics</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i4.png')}}"
                                        alt="#" /></span><span>Social</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i5.png')}}"
                                        alt="#" /></span><span>Location</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i6.png')}}"
                                        alt="#" /></span><span>Call us</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i7.png')}}"
                                        alt="#" /></span><span>Email</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section margin-top_50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_left">
                        <h2><span>Selamat datang di</span> GuruLes.com</h2>
                    </div>
                    <div class="full">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">About more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                    <img src="{{ url('assets/web/images/img2.png') }}" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2><span>Kursus </span>Popular</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{ url('assets/web/images/p1.png')}}" alt="#" />
                    <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{ url('assets/web/images/p2.png')}}" alt="#" />
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{ url('assets/web/images/p3.png')}}" alt="#" />
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section margin-top_50 silver_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full float-right_img">
                    <img src="{{ url('assets/web/images/img6.png') }}" alt="#" />
                </div>
            </div>
            <div class="col-md-6 layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_left">
                        <h2><span>Mau cari Guru?</h2>
                    </div>
                    <div class="full">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section layout_padding padding_bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full">
                    <div class="heading_main text_align_left">
                        <h2><span>Apakah kamu tau?</span></h2>
                    </div>
                    <div class="full">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                    <img class="img-responsive" src="{{ url('assets/web/images/img7.png') }}" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section layout_padding padding_bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2><span>Berita</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full blog_img_popular">
                                        <img class="img-responsive" src="{{ url('assets/web/images/img9.png')}}" alt="#" />
                                        <h4>Technology</h4>
                                        <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                            qui officia deserunt mollit anim id est laborum</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full blog_img_popular">
                                        <img class="img-responsive" src="{{ url('assets/web/images/img8.png')}}" alt="#" />
                                        <h4>Education</h4>
                                        <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                            qui officia deserunt mollit anim id est laborum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full blog_img_popular">
                                        <img class="img-responsive" src="{{ url('assets/web/images/img9.png')}}" alt="#" />
                                        <h4>Technology</h4>
                                        <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                            qui officia deserunt mollit anim id est laborum</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full blog_img_popular">
                                        <img class="img-responsive" src="{{ url('assets/web/images/img8.png')}}" alt="#" />
                                        <h4>Education</h4>
                                        <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                            qui officia deserunt mollit anim id est laborum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
