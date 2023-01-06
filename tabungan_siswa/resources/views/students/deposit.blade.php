@extends('layout.main')
@section('content')

    <form action="{{ route('deposit', $tabungan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container " style="margin-top: 250px">
            <div class="card-body shadow  mt-10" style="background-color: #2B3A55; color: white;">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="text-center">
                            <h2>Tambah Saldo</h2>
                        </div>

                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('warning'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" readonly
                            value="{{ $tabungan->name }}" name="name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" readonly
                            value="{{ $tabungan->nis }}" name="nis">
                    </div>
                    <div class="col">
                        <select name="class_id" id="class" class="form-control" style="border: 2px;">
                            <option value="{{ $tabungan->id }}">{{ $tabungan->class->name }}</option>
                            @foreach ($class as $item)
                                <option hidden value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Saldo anda Sekarang : </strong>
                            <input type="number" name="saldo" readonly value="<?php
                            if ($tabungan['saldo'] == null) {
                                echo '0';
                            } else {
                                echo $tabungan->saldo;
                            }
                            
                            ?>" class="form-control"
                                value="<?php format_rupiah($tabungan->saldo) ?>" placeholder="Title">
                        </div>
                    </div>
                </div>
                <?php $uang = 0; ?> 
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deposit:</strong>
                            <input type="text" name="deposit" id="rupiah" class="form-control" placeholder="Tambah Saldo :">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class=" col-xs-12 col-sm-12 col-md-12" style="align-self: flex-end">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php 
    function format_rupiah($angka)
    {
        $jadi = "Rp " . number_format($angka, 2, ',', '.');
        return $jadi;
    }
    ?>
@endsection
