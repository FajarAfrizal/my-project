@extends('layout.dashboard')
@section('content')
    <div class="start">
        <div class="main-start">
            <h2><b>Admin</b></h2>
        </div>
        <div class="main-title">

            <div class="d-flex">
                <box-icon name='minus'></box-icon>
                <p> Hi, Admin</p>
            </div>
            <p style="font-size: 15px">Selamat Datang</p>


            <div class="cardp" style="background-color: white">
                <img src="{{ asset('assets/img/' . $student['foto']) }}" style="width: 300px; height:300px;">
                <p> Nama Bank : @if ($student['nama_bank'] == 'lainnya')
                    {{ $student->nama_bank_text }}
                @else
                    {{ $student->nama_bank }}
                
                @endif</p>
                <p>Nama Pemilik Rekening : {{$student->nama_pemilik}}</p>
                <p>Nominal : {{$student->nominal}}</p>
                <a class="btn btn-primary" href="{{ route('pembayaran') }}">Kembali</a>
            </div>
            <div class="">
               
            </div>
        </div>
    </div>
 
