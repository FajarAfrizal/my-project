@extends('layout.alumni')
@section('content')

    <div class="container" data-aos="fade-up">

        <header class="section-header">

            <p>Hi, Admin </p>
        </header>
        <div class="row gy-4">
            
                <div class="d-flex mb-5">
                    <a href="{{ route('alumni.create') }}" class="btn btn-primary">Create</a>
                </div>
                @foreach ($alumni as $item)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                @if ($item->image == null)
                                    <img src="{{ asset('assets/image/avatar.png') }}" class="img-fluid" alt=""
                                        style="width: 300px; height:200px">
                                @else
                                    <img src="{{ asset('assets/alumni/' . $item['image']) }}" class="img-fluid"
                                        alt="" style="width: 300px ; height:200px;">
                                @endif
                                <div class="social">
                                    {{-- Twitter --}}
                                    @if ($item->twitter == null)
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    @else
                                        <a href="{{ $item->twitter }}"><i class="bi bi-twitter"></i></a>
                                    @endif

                                    {{-- Facebook --}}
                                    @if ($item->facebook == null)
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                    @else
                                        <a href="{{ $item->facebook }}"><i class="bi bi-facebook"></i></a>
                                    @endif

                                    {{-- Instagram --}}

                                    @if ($item->instagram == null)
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                    @else
                                        <a href="{{ $item->instagram }}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    {{-- Linkedlin --}}

                                    @if ($item->linkedlin == null)
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    @else
                                        <a href="{{ $item->linkedlin }}"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->nama }}</h4>
                                <span>Jurusan :{{ $item->jurusan }}</span>
                                <span>Angkatan : {{ $item->angkatan }}</span>
                                @if ($item->status_bekerja == 'bekerja')
                                    <p> {{ $item->bekerja }}</p>
                                @else
                                    <p>belum bekerja</p>
                                @endif

                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('alumni.edit', $item->id) }}" class="btn btn-primary"
                                        style="margin-right: 5px">Edit</a>
                                    <form action="{{ route('delete', $item->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            
        </div>
    </div>
@endsection
