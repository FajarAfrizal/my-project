@extends('layout.main')
@section('content')

<form action="{{ route('store') }}" method="POST" >
    @csrf
    <div class="container vh-100"  style="margin-top: 250px">
        <div class="card-body shadow  mt-10" style="background-color: #2B3A55; color: white;">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                        <h2>Create Data</h2>
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
            <div class="row mt-3">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="name" class="form-control"  placeholder="Silahkan Masukan Nama Anda">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nis:</strong>
                        <input type="text" name="nis" class="form-control"  placeholder="Silahkan Masukan Nis Anda">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rayon:</strong>
                        <select name="class_id" id="class" class="form-control" style="border: 2px;" required>
                            <option value="">Select One</option>
                            @foreach ($class as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                
                <div class="panjul col-xs-12 col-sm-12 col-md-12"  style="align-self: flex-end">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
