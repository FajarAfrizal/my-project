@extends('layout.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">{{ $alumni }} Alumni SMK Wikrama Bogor</h1>
                    <p data-aos="fade-up" data-aos-delay="400">Apahkah anda alumni SMK Wikrama Bogor ? Jika ya silahkan
                        register</p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('register') }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Registrasi</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/values-1.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">

                            <h2>SMK Wikrama Bogor</h2>
                            <p>
                                SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah
                                naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang
                                pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa</p>
                            Kompetensi keahlian di SMK Wikrama Bogor pun terus berkembang. SMK Wikrama Bogor membuka 7
                            kompetensi keahlian, diantaranya (1) Otomatisasi dan Tata Kelola Perkantoran; (2) Teknik
                            Komputer dan Jaringan; (3) Rekayasa Perangkat Lunak; (4) Multimedia; (5) Bisnis Daring dan
                            Pemasaran; (6) Tata Boga; dan (7) Perhotelan
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/gedung.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->





        <!-- ======= Services Section ======= -->
        <section id="testimonials" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <p>Testimonial</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Akhmad Munito</h3>
                            <p>Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan
                                akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Devi Indah Sari</h3>
                            <p>Our struggle in Wikrama will become Our success in the future</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>
                                Heti Suharyat</h3>
                            <p>Sebagai alumni dari SMK Wikrama, saya mendapatkan banyak ilmu yang sangat bermanfaat, selain
                                itu SMK Wikrama mengajarkan kedisplinan, inisiatif dan itu sangat bermanfaat dalam dunia
                                kerja”</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Imas</h3>
                            <p>Terima kasih kepada SMK Wikama, selama 3 tahun saya mendapat pelajaran yang sangat
                                bermanfaat, terutama pendidikan akhlak kepada murid muridnya. jaya selalu buat SMK Wikrama,
                                alhamdulillah lulus dari smk wikrama saya langsung bekerja sampe sekarang di jakarta selatan
                                PT Myindo Cyber Media</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Yani Isnaeni Hasanah</h3>
                            <p>Terima kasih saya ucapkan untuk semua Bapak & Ibu Guru SMK Wikrama Bogor yang telah mendidik
                                dan memberikan ilmunya. Dari Wikrama saya mampu bersaing dengan lulusan universitas, begitu
                                banyak sekali ilmu yang saya dapatkan, Orangtua saya tidak salah memilih sekolah untuk saya.
                                Terima kasih WIKRAMA~</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Muhamad Thoriq Al'Fatir</h3>
                            <p>SMK Wikrama mampu membuat alumni yang berjiwa ksatria dan berhati mulia terutama untuk
                                jurusan multimedia yang semoga dengan adanya BCM ini dapat mengurangi pengangguran di
                                jurusan multimedia itu sendiri, dan kami harap untuk dukungan dan do'a nya dari pihak SMK
                                Wikrama.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->



        <!-- ======= Portfolio Section ======= -->


        <!-- ======= Testimonials Section ======= -->
        <section id="jurusan" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Jurusan</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database
                                    Administration.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>PPLG</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi
                                    internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik
                                    Certified Network Associate).
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>TKJT</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house,
                                    radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit
                                    majalan/Koran, dll.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>DKV</h3>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki kompetensi yang mirip dengan
                                    program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat foto
                                    produk, desain, copy writing, dll. </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>PMN</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran/Administrasi Perkantoran
                                    memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba keterampilan
                                    siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I lomba olimpiade
                                    sekretaris tingkat nasional tahun 2017
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>BDP</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga seperti restoran,
                                    hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>TBG</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan
                                    kompetensi yang mereka pelajari.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/gedung.jpg" class="testimonial-img" alt="">
                                    <h3>HTL</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->


        <!-- ======= Contact Section ======= -->
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
