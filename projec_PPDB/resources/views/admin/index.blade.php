@extends('admin.layout.layouts')
@section('content')
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
@endsection
