<footer class="footer-box">
    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog">
                    <div class="full margin-bottom_30">
                        <img src="{{ url('assets/web/images/footer_logo.png') }}" alt="#" />
                    </div>
                    <div class="full white_fonts">
                        <p>GuruLes.com hadir untuk membantu Anda dalam mencari Guru professional, terpercaya dan berkompetensi. GuruLes.com juga menyediakan Kursus secara online yang dapat Anda pelajari secara ekslusif. </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog footer_menu white_fonts">
                    <h3>Link</h3>
                    <ul>
                        <li><a href="{{ route('login') }}">> Masuk / Daftar</a></li>
                        <li><a href="{{ route('page', 'about') }}">> Tentang</a></li>
                        <li><a href="#">> Berita</a></li>
                        <li><a href="{{ route('page', 'privacy') }}">> Kebijakan Privasi</a></li>
                        <li><a href="{{ route('page', 'terms') }}">> Syarat dan Ketentuan</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog full white_fonts">
                    <h3>Langgangan</h3>
                    <p>Masukan alamat Email Anda untuk mendapatkan penawaran terbaik dari kami</p>
                    <div class="newsletter_form">
                        <form action="">
                            <input type="email" placeholder="Alamat Email" name="#" required />
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog full white_fonts">
                    <h3>Hubungi kami</h3>
                    <ul class="full">
                        <li><img src="{{ url('assets/web/images/i5.png')}}"><span>Yogyakarta, <br>Indonesia</span></li>
                        <li><img src="{{ url('assets/web/images/i6.png')}}"><span>dukungan@gurules.com</span></li>
                        <li><img src="{{ url('assets/web/images/i7.png')}}"><span>+621122334455</span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</footer>
