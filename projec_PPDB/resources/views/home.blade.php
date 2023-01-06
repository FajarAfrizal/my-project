@extends('layout.main')
@section('content')
    <header class="header">
        <div class="overlay">
            <h6 class="subtitle">PPDB TP 2023-2024</h6>
            <h1 class="title">SMK WIKRAMA BOGOR</h1>
            <div class="buttons text-center">
                <a href="{{ route('register') }}" class="btn btn-primary rounded w-lg btn-lg my-1">PENDAFTARAN PPDB</a>

            </div>
        </div>
    </header>
    <!-- End Of Page Header -->

    <!-- Box -->
    <div class="box text-center">
        <div class="box-item">
            <i class="ti-vector"></i>
            <h6 class="box-title">MOTTO</h6>
            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
        </div>
        <div class="box-item">
            <i class="ti-filter"></i>
            <h6 class="box-title">AFIRMASI</h6>
            <p>Pada MU Negri - Kami berjanji - Lulus Wikrama Siap Membangun Negri</p>
        </div>
        <div class="box-item">
            <i class="ti-vector"></i>
            <h6 class="box-title">ATITUDE</h6>
            <p>Aku Ada Lingkungan ku Bahagi</p>
        </div>
    </div> 
    
    <!-- End of Box -->

    <!-- About Section -->
    <section id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                    <img src="assets/imgs/gedung.jpg" alt="" class="w-100 img-thumbnail mb-3">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h6 class="section-subtitle mb-0">Wikrama</h6>
                    <p class="mt-3">
 	
                        SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa</p>
                    <p>Kompetensi keahlian di SMK Wikrama Bogor pun terus berkembang. SMK Wikrama Bogor membuka 7 kompetensi keahlian, diantaranya (1) Otomatisasi dan Tata Kelola Perkantoran; (2) Teknik Komputer dan Jaringan; (3) Rekayasa Perangkat Lunak; (4) Multimedia; (5) Bisnis Daring dan Pemasaran; (6) Tata Boga; dan (7) Perhotelan </p>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Section -->


    <!-- Fatcs Section -->
    <section id="jurusan">
        <div class="swiper" style="user-select: none">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="col-md-4 swiper-slide" >
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Pengembangan Perangkat Lunak dan Gim</h5>
                                <strong>Keunggulan</strong>
                                <p>Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 swiper-slide">
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Teknik Jaringan Komputer dan Telekomunikasi</h5>
                                <p>Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 swiper-slide">
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Desain Komunikasi</h5>
                                <p>Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 swiper-slide">
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Pemasaran</h5>
                                <p>Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki kompetensi yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 swiper-slide">
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Manajemen</h5>
                                <p>Kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran/Administrasi Perkantoran memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I lomba olimpiade sekretaris tingkat nasional tahun 2017</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 swiper-slide">
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Tata Boga</h5>
                                <p>Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 swiper-slide">
                    <div class="">
                        <div class="card shadow blog-post my-4 my-sm-4 my-md-0">
                            <img src="assets/imgs/gedung.jpg" alt="">
                            <div class="card-body">

                                <h5 class="card-title">Perhotelan</h5>
                                <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </section>
            <!-- If we need navigation buttons -->

            <!-- Testimonial Section -->

            <section id="testimonial">
                <div class="container">
                    <h6 class="section-subtitle text-center">Testimonial</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="testimonial-wrapper">
                                <div class="body">
                                    <p class="subtitle">Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini</p>
                                   
                                    <h6 class="title">2000</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonial-wrapper">

                                <div class="body">
                                    <p class="subtitle">Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                                    <h6 class="title">2016</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonial-wrapper">

                                <div class="body">
                                    <p class="subtitle">SMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.</p>
                                    <h6 class="title">2011</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Testimonial Section -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="100%" height="475" src="https://www.youtube.com/embed/TP4THzsAa3M"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- end of modal -->

            <!-- Blog Section -->
            

            <!-- Contact Section -->
            <section id="contact" style="background-color: blue">
                <div class="container">
                    <div class="contact-card">
                        <div class="infos">
                            <h6 class="section-subtitle">Get Here</h6>
                            <h6 class="section-title mb-4">Contact Us</h6>

                            <div class="item">
                                <i class="ti-location-pin"></i>
                                <div class="">
                                    <h5>Location</h5>
                                    <p> Jl. Raya Wangun No.21, RT.01/RW.06,</p>
                                    <p>Sindangsari, Kec. Bogor Tim., Kota Bogor,</p>
                                    <p> Jawa Barat 16146</p>
                                </div>
                            </div>
                            <div class="item">
                                <i class="ti-mobile"></i>
                                <div>
                                    <h5>Phone Number</h5>
                                    <p>0251-8242411</p>
                                </div>
                            </div>
                            <div class="item">
                                <i class="ti-email"></i>
                                <div class="mb-0">
                                    <h5>Email Address</h5>
                                    <p>prohumasi@smkwikrama.sch.id</p>
                                </div>
                            </div>
                            <div class="item">
                                <i class="ti-world"></i>
                                <div class="mb-0">
                                    <h5>Website</h5>
                                    <p>https://www.smkwikrama.sch.id/</p>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <h6 class="section-subtitle">Available 24/7</h6>
                            <h6 class="section-title mb-4">Get In Touch</h6>
                            <form action="" class="contact-form" id="contact-form">
                                <div class="form-group">
                                    <input type="email" class="name form-control form-control-lg" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Your name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Your email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <textarea  name="contact-message" id="" cols="30" rows="7" class="message form-control form-control-lg"
                                        placeholder="Message" ></textarea>
                                </div>
                                <input type="submit" value="Send" class="send-btn btn btn-primary btn-block btn-lg mt-3">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section -->

            <section class="has-bg-img py-0">
                <div class="container">
                    <div class="footer">
                        <div class="footer-lists">
                            <ul class="list">
                                <li class="list-head">
                                    <h6 class="font-weight-bold">ABOUT US</h6>
                                </li>
                                <li class="list-body">
                                    <a href="#" class="logo">
                                        <img src="assets/imgs/logo2.png" alt="">
                                        <h6>SMK WIKRAMA BOGOR</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nobis fugit maxime
                                        deleniti minus optio accusamus, quam maiores explicabo sunt.</p>
                                </li>
                            </ul>
                            <ul class="list">
                                <li class="list-head">
                                    <h6 class="font-weight-bold">USEFUL LINKS</h6>
                                </li>
                                <li class="list-body" >
                                    <div class="row">
                                        <div class="col">
                                            <a href="#home">Beranda</a>
                                            <a href="#jurusan">Jurusan</a>
                                            <a href="#tentang">Tentang Kami</a>
                                            <a href="#testimonail">  Testimoni</a>
                                        </div>
                                        <div class="col">
                                            <a href="#contact">Hubungi Kami</a>
                                            <a href="{{route('login')}}">Login</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list">
                                <li class="list-head">
                                    <h6 class="font-weight-bold">CONTACT INFO</h6>
                                </li>
                                <li class="list-body">
                                    <p>Contact us and we'll get back to you within 24 hours.</p>
                                    <p><i class="ti-location-pin"></i>         <p> Jl. Raya Wangun No.21, RT.01/RW.06,</p>
                                    <p>Sindangsari, Kec. Bogor Tim., Kota Bogor,</p>
                                    <p> Jawa Barat 16146</p></p>
                                    <p><i class="ti-email"></i> prohumasi@smkwikrama.sch.id</p>
                                    <div class="social-links">
                                        {{-- <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                                        <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                                        <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                                        <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                                        <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                                        <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a> --}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
        @endsection
