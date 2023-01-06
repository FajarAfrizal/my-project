 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     {{-- jquery --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
     {{-- ajax --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
     {{-- select --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     <title>document</title>
 </head>

 <body style=" background-image: linear-gradient(to right, #263dc0, #162a60, #130153);">
     <div class="container d-flex justify-content-center">
         <div class="card card-form mx-md-5 mx-0 my-5">
             <div class="card-body px-2">
                 <h3 class="card-heading text-center">Form Pendaftaran PPDB</h3>
                 <p class="card-subheading text-center mb-3 font-weight-bold pb-3 text-dark">SMK Wikrama Bogor TP.
                     2023-2024</p>
                 <form  action="{{route('auth.register')}}" method="POST">
                    @csrf
                     <div class="row">
                         <div class="form-group col-md-6">
                             <label for="nisn" class="mb-2">NISN</label>
                             <input type="text" name="nisn"  class="form-control "
                                 placeholder="Masukkan NISN"  required>
                         </div>
                         <div class="form-group col-md-6">
                             <label  class="ml-2 mb-2">Jenis Kelamin</label>
                             <select name="kelamin" class="form-control w-100"  >
                                 <option hidden>--Jenis Kelamin--</option>
                                 <option value="Perempuan">Perempuan</option>
                                 <option value="Laki-Laki">Laki-Laki</option>
                             </select>
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <label  class="mb-2">Nama</label>
                             <input type="text" name="nama" class="form-control"
                                 placeholder="Masukkan Nama Lengkap"  required >
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <label for="sekolah" class="mb-2">Asal Sekolah</label><br>
                             <select name="asal_sekolah" class="theSelect form-control w-100 ml-0"
                                 onchange='checkvalue(this.value)'>
                                 <option hidden disabled selected>--Pilih Asal Sekolah--</option>
                                 <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                                 <option value="SMPN 2 Cibinong">SMPN 2 Cibinong</option>
                                 <option value="SMPN 2 Cicurug">SMPN 2 Cicurug</option>
                                 <option value="SMPN 3 Tanggerang">SMPN 3 Tanggerang</option>
                                 <option value="lainnya">LAINNYA</option>
                             </select>
                         </div>
                     </div>
                     <div class="row" id="lainnya1" style="display: none">
                         <div class="form-group col-md-12">
                             <label for="asal_sekolah_text" class="mb-2">Nama Sekolah</label>
                             <input type="text" name="asal_sekolah_text" id="asal_sekolah_text" class="form-control"
                                 placeholder="Masukkan Asal Sekolah">
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <label for="email" class="mb-2">Email</label>
                             <input type="email" name="email" id="email" class="form-control "
                                 placeholder="Masukkan Email Aktif" value="" required autocomplete="email">
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <label  class="mb-2">Nomor Handphone</label>
                             <input type="number" name="no_hp"  class="form-control"
                                 placeholder="Contoh : 08......." required>
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-6">
                             <label  class="mb-2">Nomor HP Ayah</label>
                             <input type="number" name="no_hp_ayah" class="form-control" 
                                 placeholder="Contoh : 08......." required>
                         </div>
                         <div class="form-group col-md-6">
                             <label  class="mb-2">Nomor HP Ibu</label>
                             <input type="number" name="no_hp_ibu" class="form-control"
                                 placeholder="Contoh : 08......." required>
                         </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <div></div>
                        <button type="submit"
                            class="btn btn-main-sm-warning shadow-md bordered mt-3" style="background-color: #3007c7;color:white"><span>Registrasi</span></button>
                    </div>
                 </form>
             </div>
         </div>
     </div>

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
                                                 <img src="assets/imgs/logo2.png"
                                                     >
                                                 <h6>SMK WIKRAMA BOGOR</h6>
                                             </a>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nobis
                                                 fugit maxime deleniti minus optio accusamus, quam maiores explicabo
                                                 sunt.</p>
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
                                             <p><i class="ti-email"></i> info@website.com</p>
                                             <div class="social-links">
                                                 <a href="javascript:void(0)" class="link"><i
                                                         class="ti-facebook"></i></a>
                                                 <a href="javascript:void(0)" class="link"><i
                                                         class="ti-twitter-alt"></i></a>
                                                 <a href="javascript:void(0)" class="link"><i
                                                         class="ti-google"></i></a>
                                                 <a href="javascript:void(0)" class="link"><i
                                                         class="ti-pinterest-alt"></i></a>
                                                 <a href="javascript:void(0)" class="link"><i
                                                         class="ti-instagram"></i></a>
                                                 <a href="javascript:void(0)" class="link"><i
                                                         class="ti-rss"></i></a>
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </section>



                     <script>
                         $(".theSelect").select2();
                     </script>
                     <script>
                         function checkvalue(val) {
                             if (val === "lainnya") {
                                 document.getElementById('lainnya1').style.display = 'block';
                             } else {
                                 document.getElementById('lainnya1').style.display = 'none';
                             }
                         }
                     </script>

                     <!-- Optional JavaScript; choose one of the two! -->

                     <!-- Option 1: Bootstrap Bundle with Popper -->
                     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                     </script>

                     <!-- Option 2: Separate Popper and Bootstrap JS -->

                     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                         integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
                     </script>
                     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                         integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
                     </script>

 </body>

 </html>
