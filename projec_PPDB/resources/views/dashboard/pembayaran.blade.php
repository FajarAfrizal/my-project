@extends('layout.dashboard')
@section('content')
    <div class="start">
        @if (Auth::user()->role == 'admin')
            <div class="main-start">
                <h2><b>Admin</b></h2>
            </div>
            <table class="table table-bordered border-primary table-light">
                <tr>
                    <th>No</th>
                    <th>Nomor Registrasi</th>
                    <th>Bukti Pembayaran</th>
                    <th>Detail Pendaftaran</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($admin as $item)
                    <tr class="table-secondary">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>
                            <a href="{{ route('lihat', $item->id) }}">Lihat</a>
                        </td>
                        <td>
                            <a href="{{ route('detail', $item->user_id) }}">Detail</a>
                        </td>
                        <td>
                            @if ($item['status'] == 1)
                                <p>Validasi</p>
                            @elseif ($item['status'] == 2)
                                <p>Tolak</p>
                            @else
                                <div class="d-flex justify-content-end">

                                    <form action="{{ route('validasi', $item->id) }}" method="POST" class="">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success ">Validasi</button>
                                    </form>
                                    <form action="{{ route('tolak', $item->id) }}" method="POST" class="">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger ml-3">Tolak</button>
                                    </form>

                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="main-start">
                <h2><b>Student</b></h2>
            </div>
            @if ($student == null)
            <div class="main-title">
                <div class="d-flex">
                    <box-icon name='minus'></box-icon>
                    <p> Pembayaran</p>
                </div>
                <p style="font-size: 15px">Silahkan upload ukti pembayaran anda di form beriku</p>

            </div>
                <form method="POST" action="{{ route('transaksi.pembayaran') }}" enctype="multipart/form-data">
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
                                            <select name="nama_bank" id="class" class="theSelect form-control w-100 ml-0" onchange='checkvalue(this.value)'>
                                                <option hidden disabled selected>--Pilih Bank--</option>
                                                @foreach ($bank as $item)
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endforeach
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
                                            <input type="text" name="nama_bank_text" class="form-control"
                                                placeholder="Masukkan nama bank">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="bukti">Foto bukti pembayaran</label>
                                            <input name="foto" type="file" class="custom-file-input"
                                                aria-describedby="bukti" required>
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class="row align-items-start">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-block btn-primary">Upload Bukti
                                                Pembayaran</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @elseif($student['status'] == 2)
            <div class="main-title">
                <div class="d-flex">
                    <box-icon name='minus'></box-icon>
                    <p> Pembayaran</p>
                </div>
                <p style="font-size: 15px">Silahkan upload ukti pembayaran anda di form beriku</p>

            </div>
                <form method="POST" action="{{ route('edit.pembayaran', $student->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
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
                                            <select name="nama_bank" id="class" class="theSelect form-control w-100 ml-0" onchange='checkvalue(this.value)'>
                                                <option hidden disabled selected>--Pilih Bank--</option>
                                                @foreach ($bank as $item)
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endforeach
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
                                            <input type="text" name="nama_bank_text" class="form-control"
                                                placeholder="Masukkan nama bank">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="bukti">Foto bukti pembayaran</label>
                                            <input name="foto" type="file" class="custom-file-input"
                                                aria-describedby="bukti" required>
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class="row align-items-start">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-block btn-primary">Upload Bukti
                                                Pembayaran</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @elseif($student['status'] == 1)
                <div class="panjul" style="background-color: rgb(16, 210, 16)">
                    <p>Pembayaran di verivikasi, silahkan untuk melanjutkan ke tahap selanjutnya</p>
                </div>
            @else
                <div class="panjul" style="background-color: orange">
                    <p>Pembayaran sedang di verivikasi, harap tunggu informasi selanjutnya</p>
                </div>
            @endif
        @endif
    </div>

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
