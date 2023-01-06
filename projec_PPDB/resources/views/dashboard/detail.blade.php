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


            <div class="panjul" style="background-color: white">
                <ul>
                    <li>NISN: {{ $student->nisn }}</li>
                    <li>Nama : {{ $student->nama }}</li>
                    <li>Jenis kelamin : {{ $student->kelamin }}</li>
                    <li>Asal_sekolah : {{ $student->asal_sekolah }}</li>
                    <li>Email : {{ $student->email }}</li>
                    <li>No Hp : {{ $student->no_hp }}</li>
                    <li>No Hp Ayah : {{ $student->no_hp_ayah }}</li>
                    <li>No Hp Ibu : {{ $student->no_hp_ibu }}</li>
                    <a class="btn btn-primary" href="{{ route('pembayaran') }}">Kembali</a>
                </ul>
            </div>
        </div>
    </div>
