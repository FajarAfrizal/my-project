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
    <title>document</title>
</head>

<body style="">
    <div class="container d-flex justify-content-center">
        <div class="card card-form mx-md-5 mx-0 my-5">
            <div class="card-body px-2 bg-white shadow">
                <h3 class="card-heading text-center">Menambahkan Data Alumni</h3>
                <p class="card-subheading text-center mb-3 font-weight-bold pb-3 text-dark">SMK Wikrama Bogor</p>
                <form action="{{ route('update', $alumni->id) }}" data-aos="fade-up" data-aos-delay="400" class="form"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('error-login'))
                            <div class="btn btn-danger">
                                <h3>Email atau Password Salah</h3>
                            </div>
                        @endif
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nama" class="mb-2"><b>Nama</b></label>
                                <input type="text" placeholder="Masukan Nama Anda" name="nama" value="{{ $alumni->nama}}" id="nama"
                                    class="form-control mb-2" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="ml-2 mb-2"><b>Jurusan</b></label>
                                <select name="jurusan"  value class="form-control w-100 mb-2">
                                    <option hidden disabled selected value="{{$alumni->jurusan}}">{{$alumni->jurusan}}</option>
                                    <option value="PPLG">PPLG</option>
                                    <option value="DKV">DKV</option>
                                    <option value="TJKT">TJKT</option>
                                    <option value="PMN">PMN</option>
                                    <option value="TBG">TBG</option>
                                    <option value="BDP">BDP</option>
                                    <option value="HTL">HTL</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="angkatan" class="mb-2"><b>Angkatan</b></label>
                                    <input type="number" class="form-control mb-2" value="{{$alumni->angkatan}}" placeholder="Angkatan"
                                        name="angkatan" id="angkatan" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-goup col-md-12">
                                    <label class="ml-2 mb-2"> <b> Status Bekerja</b></label>
                                    <select name="status_bekerja" class="form-control mb-2" onchange='checkvalue(this.value)'>
                                        <option hidden disabled selected value="{{$alumni->status_bekerja}}">--{{$alumni->status_bekerja}}--</option>
                                        <option value="bekerja">Bekerja</option>
                                        <option value="belum bekerja">Belum Bekerja</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row" id="bekerja1"  style="display: none">
                                <div class="form-group col-md-12">
                                    <label for="bekerja" class="ml-2 mb-2"><b>Bekerja di</b></label>
                                    <input type="text" value="" placeholder="Bekerja di" name="bekerja" id="bekerja"
                                        class="form-control mb-2" >
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="instagram" class="mb-2"><b>Akun Instagram</b></label>
                                <input type="text" value="{{$alumni->instagram}}" placeholder="Masukan Link Instagram Anda" name="instagram" id="instagram"
                                    class="form-control mb-2" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="facebook" class="mb-2"><b>Akun Facebook</b></label>
                                <input type="text" value="{{$alumni->facebook}}" placeholder="Masukan Link facebook Anda" name="facebook" id="facebook"
                                    class="form-control mb-2" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="linkedlin" class="mb-2"><b> Akun Linkedlin</b></label>
                                <input type="text" value="{{$alumni->linkedlin}}" placeholder="Masukan Link linkedlin Anda" name="linkedlin" id="linkedlin"
                                    class="form-control mb-2" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="twitter" class="mb-2"><b>Akun Twitter</b></label>
                                <input type="text" value="{{$alumni->twitter}}" placeholder="Masukan twitter Anda" name="twitter" id="twitter"
                                    class="form-control mb-2" >
                            </div>
                            <div class="input-group col-md-12">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="bukti"><b>Foto</b></label>
                                    <input name="image" value="{{$alumni->image}}" type="file" class="form-control mb-2"
                                         required>
                                </div>
                            </div>

                            <button type="submit" class="form-control mb-2 bg-primary" style="color: white" >Login</button>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>





    <script>
        $(".theSelect").select2();
    </script>
    <script>
        function checkvalue(val) {
            if (val === "bekerja") {
                document.getElementById('bekerja1').style.display = 'block';
            } else {
                document.getElementById('bekerja1').style.display = 'none';
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
