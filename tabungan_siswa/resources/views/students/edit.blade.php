@extends('layout.main')
@section('content')
    <form action="{{ route('edit', $tabungan->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="container " style="margin-top: 250px">
            <div class="card-body shadow bg-white mt-10">
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
                        <input type="text" class="form-control" placeholder="First name" 
                            value="{{ $tabungan->name }}" name="name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" 
                            value="{{ $tabungan->nis }}" name="nis">
                    </div>
                    <div class="col">
                        <select name="class_id" id="class" class="form-control" style="border: 2px;">
                            <option value="{{ $tabungan->id }}">{{ $tabungan->class->name }}</option>
                            @foreach ($class as $item)
                                <option  value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" style="margin-left: 10px"  class="btn btn-primary mt-3">Edit</button>
    </form>
@endsection
