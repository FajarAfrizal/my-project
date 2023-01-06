@extends('admin.layout.layouts')
@section('content')
    <div class="main-title">
        <div class="d-flex">
            <box-icon name='minus'></box-icon>
            <p> Pembayaran</p>
        </div>
        <p style="font-size: 15px">Silahkan upload bukti pembayaran anda di form berikut</p>

    </div>
    @if ($student === null)
    <form method="POST" action="{{route('transaksi.pembayaran')}}" enctype="multipart/form-data" >
        @csrf
        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col-sm-4">
                                <label>Nama Bank</label>
                                <select name="nama_bank" class="theSelect form-control w-100 ml-0" onchange='checkvalue(this.value)'>
                                    <option value="sariah">sariah</option>
                                    <option value="lainnya">LAINNYA</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label>Nama Pemilik Rekening</label>
                                <input type="text" class="form-control" name="nama_pemilik"
                                    value=""required>
                            </div>
                            <div class="col-sm-4">
                                <label>Nominal</label>
                                <input type="text" id="rupiah" class="form-control" name="nominal"
                                    value=""required>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row" id="lainnya1" style="display: none">
                            <div class="form-group col-md-12">
                                <label for="asal_sekolah_text" class="mb-2">Nama BANK</label>
                                <input type="text" name="nama_bank_text"  class="form-control"
                                    placeholder="Masukkan nama bank">
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="custom-file">
                                <label class="custom-file-label" for="bukti">Foto bukti pembayaran</label>
                                <input name="foto" type="file" class="custom-file-input"  aria-describedby="bukti"  required>          
                            </div>
                        </div>
                        <br>

                        <br>
                        <div class="row align-items-start">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-block btn-primary">Upload Bukti Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        @else
         <div class="panjul" style="background-color: orange">
            <p>Pembayaran sedang di verivikasi, harap tunggu informasi selanjutnya</p>
        </div>   
        @endif
    
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
@endsection
