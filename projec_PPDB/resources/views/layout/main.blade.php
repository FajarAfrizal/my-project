<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Creative Studio main styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <a href="#home" class="scroll-top">
        <i class='bx bx-up-arrow-alt' ></i>
    </a>
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo2.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="{{asset('assets/js/swiper.js')}}"></script>
    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Creative Studio js -->
    <script src="assets/js/main.js"></script>
{{-- email js --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
    (function() {
        emailjs.init("46H9UjIkgknoGaDr7");
    })();
    
    </script>

        {{-- sweet alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       
</body>

</html>
