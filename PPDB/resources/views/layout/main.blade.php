<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Studio landing page.">
    <meta name="author" content="Devcrud">
    <title>Document</title>

     <!-- font icons -->
     <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

     <!-- Bootstrap + Creative Studio main styles -->
     <link rel="stylesheet" href="assets/css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo2.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="components.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Creative Studio js -->
<script src="assets/js/creative-studio.js"></script>

</body>
</html>