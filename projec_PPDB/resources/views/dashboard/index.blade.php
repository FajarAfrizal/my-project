@extends('layout.dashboard')
@section('content')
    <div class="start">
        @if (Auth::user()->role == 'admin')
            <div class="main-start">
                <h2><b>Admin</b></h2>
            </div>
            <div class="main-title">
                @if ($message = Session::get('warning'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="d-flex">
                    <box-icon name='minus'></box-icon>
                    <p> Hi, Admin</p>
                </div>
                <p style="font-size: 15px">Selamat Datang</p>


                <div class="panjul" style="background-color: orange">
                    <p>Silahkan mengecek data pendaftaran beserta bukti pembayaran para calon siswa</p>
                </div>
            </div>
        @else
            <div class="main-start">
                <h2><b>Student</b></h2>
            </div>

            <div class="main-title">
                @if ($message = Session::get('warning'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="d-flex">
                    <box-icon name='minus'></box-icon>
                    <p> Hi, {{ Auth::user()->nama }}</p>
                </div>
                <p style="font-size: 15px">Selamat Datang</p>
                <div class="d-flex">
                    <div class="justify-items-left">
                        <div class="card mb-5">
                            <div class="card-body bg-white "
                                style="background-image: linear-gradient(to right, #263dc0, #162a60, #130153);color:white;">
                                <h1 class="mb-3">{{ Auth::user()->nama }}</h1>
                                <p><b>Nomor Seleksi </b>:{{ Auth::user()->id }}</p>
                                <p><b>NISN </b>:{{ Auth::user()->nisn }}</p>
                                <p><b>Nama </b>:{{ Auth::user()->nama }}</p>
                                <p><b>Nomor Hp </b>:{{ Auth::user()->no_hp }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($student === null)
                @elseif ($student['status'] == 1)
                    <div class="stenly" style="background-color: rgb(100, 255, 100)">
                        <p>Pembayaran telah di berhasil</p>
                    </div>
                @elseif ($student['status']== 0)
                    <div class="panjul" style="background-color: orange">
                        <p>Pembayaran sedang di verivikasi, harap tunggu informasi selanjutnya</p>
                    </div>
                    <div class="stenly" style="background-color: rgb(100, 255, 100)">
                        <p>Pembayarn telah dilakukan silahkan menunggu admin validasi</p>
                    </div>
                @endif
            </div>
        @endif
    </div>

@endsection
