@extends('layout.main')
@section('content')
    <form action="{{ route('withdraw', $tabungan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container " style="margin-top: 250px">
            <div class="card-body shadow  mt-10" style="background-color: #2B3A55; color: white;">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="text-center">
                            <h2>Tarik Saldo</h2>
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
                        <strong >Nama : </strong>
                        <input type="text" class="form-control" placeholder="First name" readonly
                            value="{{ $tabungan->name }}" name="name">
                    </div>
                    <div class="col">
                        <strong >Nis : </strong>
                        <input type="text" class="form-control" placeholder="Last name" readonly
                            value="{{ $tabungan->nis }}" name="nis">
                    </div>
                    <div class="col">
                        <strong >Rayon : </strong>
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
                            <strong>Saldo anda Sekarang :
                            </strong>
                            <input type="number" name="saldo" readonly class="form-control" value="<?php
                            if ($tabungan['saldo'] == null) {
                                echo '0';
                            } else {
                                 echo $tabungan->saldo;
                            }
                            
                            ?>"
                            value="{{$tabungan->saldo}}">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Withdraw:</strong>
                            <input type="text" name="withdraw" id="rupiah" class="form-control" placeholder="Tarik Saldo Anda:">
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
