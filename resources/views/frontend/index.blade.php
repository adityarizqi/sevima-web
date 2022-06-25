@extends('frontend.layouts.app')

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
                                    <h4>Temukan guru favoritmu sekarang!</h4>
                                    <br>
                                    <div class="full center">
                                        <a class="contact_bt" href="{{ route('login') }}">Mulai</a>
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
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i4.png')}}"
                                        alt="#" /></span><span>SD</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i1.png')}}"
                                        alt="#" /></span><span>SMP/SMA</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i3.png')}}"
                                        alt="#" /></span><span>Kejurusan</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i2.png')}}"
                                        alt="#" /></span><span>Kuliah</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i5.png')}}"
                                        alt="#" /></span><span>Lokasi</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i6.png')}}"
                                        alt="#" /></span><span>Email</span></a></li>
                        <li><a href="#"><span class="icon"><img src="{{ url('assets/web/images/i7.png')}}"
                                        alt="#" /></span><span>Telpon</span></a></li>
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
                        <p>GuruLes.com hadir untuk membantu Anda dalam mencari Guru professional, terpercaya dan berkompetensi. GuruLes.com juga menyediakan Kursus secara online yang dapat Anda pelajari secara ekslusif. Ayo gabung dan nikmati manfaatnya sekarang!</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">Lebih banyak</a>
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
                        <h2><span>Kursus </span>Pilihan</h2>
                    </div>
                </div>
            </div>
            @foreach ($courses as $item)
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{ url("$item->image")}}" alt="#" />
                    <h4>{{ \Illuminate\Support\Str::limit($item->title, 22, $end='...') }}</h4>
                </div>
            </div>
            @endforeach
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
                        <h2><span>Masih ga yakin?</h2>
                    </div>
                    <div class="full">
                        <p>Lebih dari satu juta murid telah memberikan ulasan
                            bintang 5 kepada guru mereka. Cek profil guru dengan bebas dan pilih guru yang Anda inginkan sesuai dengan kebutuhan dan kriteria Anda (tarif, gelar pendidikan, pengalaman, tatap muka di rumah atau kursus secara online). Para guru akan memberikan tanggapan terhadap permintaan kursus Anda dalam beberapa jam! Dan jika Anda tidak bisa menemukan guru yang Anda inginkan, tim kami ada di sini untuk membantu Anda.</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="{{ route('login') }}">Daftar sekarang!</a>
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
                        <p>Atur pelaksanaan dan jadwal kursus Anda sendiri dengan guru yang Anda pilih, semua berawal dari pesan Anda. Anda bebas menyesuaikan dengan jadwal Anda. jadi tidak perlu khawatir akan bertabrakan dengan aktifitas Anda.</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">Lebih banyak</a>
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
                                @foreach ($news as $item)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full blog_img_popular">
                                        <img class="img-responsive" src="{{ url("$item->image")}}" alt="#" />
                                        <h4>{{ \Illuminate\Support\Str::limit($item->title, 35, $end='...') }}</h4>
                                        <p>{{ \Illuminate\Support\Str::limit($item->content, 120, $end='...') }} <small><a href="">- selengkapnya</a></small></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
