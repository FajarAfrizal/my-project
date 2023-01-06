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
                <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page" class="w-100 img-thumbnail mb-3">
            </div>
            <div class="col-md-7 col-lg-8">
                <h6 class="section-subtitle mb-0">Wikrama</h6>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente cupiditate quas, amet harum perferendis minus, cum dolorum obcaecati iste aspernatur voluptatum aut.</p>
                <p>Cum laudantium unde nemo doloribus eligendi quodarum ea vitae dicta. Accusantium vero, ea? Alias, atque libero. Id, ut harum. </p>
                <p>consectetur adipisicing elit. Omnis quidem, quos iure a dolorum illum culpa quia nemo soluta, ratione harum beatae minus doloribus consectetur! Similique tempora sunt doloribus molestias.</p>
            </div>
        </div>
    </div>
</section>
<!-- End of About Section -->


<!-- Fatcs Section -->

<!-- Testimonial Section -->
<section id="testimonial">
    <div class="container">
        <h6 class="section-subtitle text-center">Testimonial</h6>
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial-wrapper">
                    <div class="body">
                        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis adipisci nihil.</p>
                        <h6 class="title">1923</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-wrapper">
                    
                    <div class="body">
                        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis adipisci nihil.</p>
                        <h6 class="title">2021</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-wrapper">
                    
                    <div class="body">
                        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis adipisci nihil.</p>
                        <h6 class="title">2022</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-wrapper">
                    
                    <div class="body">
                        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis adipisci nihil.</p>
                        <h6 class="title">2024</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <iframe width="100%" height="475" src="https://www.youtube.com/embed/TP4THzsAa3M" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- end of modal -->

<!-- Blog Section -->
<section id="jurusan">
    <div class="container">
        <h6 class="section-subtitle text-center">News Feeds</h6>
        <h6 class="section-title mb-6 text-center">Our Blog</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            
                        </div>
                        <h5 class="card-title">Possimus aliquam veniam</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            <a href="javascript:void(0)"><i class="ti-comments"></i> 434</a>
                            <a href="javascript:void(0)"><i class="ti-eye"></i> 987</a>
                        </div>
                        <h5 class="card-title">Repudiandae laudantium</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            <a href="javascript:void(0)"><i class="ti-comments"></i> 164</a>
                            <a href="javascript:void(0)"><i class="ti-eye"></i> 425</a>
                        </div>
                        <h5 class="card-title">Laboriosam asperiores</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            
                        </div>
                        <h5 class="card-title">Possimus aliquam veniam</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            
                        </div>
                        <h5 class="card-title">Possimus aliquam veniam</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            
                        </div>
                        <h5 class="card-title">Possimus aliquam veniam</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="assets/imgs/gedung.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                    <div class="card-body">
                        <div class="details mb-3">
                            
                        </div>
                        <h5 class="card-title">Possimus aliquam veniam</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laudantium dolor nisi obcaecati, non laboriosam asperiores doloremque tempora repellendus iure!</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->

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
                        <p> 12345 Fake ST NoWhere AB Country</p>
                    </div>                          
                </div>
                <div class="item">
                    <i class="ti-mobile"></i>
                    <div>
                        <h5>Phone Number</h5>
                        <p>(123) 456-7890</p>
                    </div>                          
                </div>
                <div class="item">
                    <i class="ti-email"></i>
                    <div class="mb-0">
                        <h5>Email Address</h5>
                        <p>info@website.com</p>
                    </div>
                </div>
                <div class="item">
                    <i class="ti-world"></i>
                    <div class="mb-0">
                        <h5>example.com</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="form">
                <h6 class="section-subtitle">Available 24/7</h6>
                <h6 class="section-title mb-4">Get In Touch</h6>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact-message" id="" cols="30" rows="7" class="form-control form-control-lg" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Send Message</button>
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
                            <img src="assets/imgs/logo2.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                            <h6>SMK WIKRAMA BOGOR</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nobis fugit maxime deleniti minus optio accusamus, quam maiores explicabo sunt.</p>                   
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">USEFUL LINKS</h6>
                    </li>
                    <li class="list-body">
                        <div class="row">
                            <div class="col">
                                <a href="#about">About</a>
                                <a href="#service">Service</a>
                                <a href="#portfolio">Portfolio</a>
                                <a href="#testmonail">Testimonial</a>
                            </div>
                            <div class="col">
                                <a href="#team">Team</a>
                                <a href="#blog">Blog</a>
                                <a href="#">Faq</a>
                                <a href="#">Privacy Policy</a>                  
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
                        <p><i class="ti-location-pin"></i> 12345 Fake ST NoWhere AB Country</p>
                        <p><i class="ti-email"></i>  info@website.com</p>
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>    
    </div>
</section>
@endsection