@extends('layout.alumni')
@section('content')
    <section id="home" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">

                <p>Data Alumni SMK Wikrama Bogor</p>
            </header>

            @if (Auth::user()->role == 'admin')
            <div class="d-flex justify-content-center">
                <a href="{{ route('admin.data')}}" class="btn btn-primary">Masuk Kehalaman Admin</a>
            </div>
            @else
                <div class="row gy-4">
                    @if ($alumni == null || $alumni->user_id == null)
                        <div class="d-flex mb-5">
                            <a href="{{ route('alumni.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @else
                        @if ($alumni->status_bekerja == 'bekerja')
                            <div class="panjul mb-5">
                                <p>Selamat Anda Sudah bekerja di<b> {{ $alumni->bekerja }}</b></p>
                            </div>
                        @else
                        @endif
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    @if ($alumni->image == null)
                                        <img src="{{ asset('assets/image/avatar.png') }}" class="img-fluid" alt=""
                                            style="width: 300px; height:500px">
                                    @else
                                        <img src="{{ asset('assets/alumni/' . $alumni['image']) }}" class="img-fluid"
                                            alt="" style="width: 300px ; height:500px;">
                                    @endif
                                    <div class="social">
                                        {{-- Twitter --}}
                                        @if ($alumni->twitter == null)
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                        @else
                                            <a href="{{ $alumni->twitter }}"><i class="bi bi-twitter"></i></a>
                                        @endif

                                        {{-- Facebook --}}
                                        @if ($alumni->facebook == null)
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        @else
                                            <a href="{{ $alumni->facebook }}"><i class="bi bi-facebook"></i></a>
                                        @endif

                                        {{-- Instagram --}}

                                        @if ($alumni->instagram == null)
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                        @else
                                            <a href="{{ $alumni->instagram }}"><i class="bi bi-instagram"></i></a>
                                        @endif
                                        {{-- Linkedlin --}}

                                        @if ($alumni->linkedlin == null)
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        @else
                                            <a href="{{ $alumni->linkedlin }}"><i class="bi bi-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $alumni->nama }}</h4>
                                    <span>Jurusan :{{ $alumni->jurusan }}</span>
                                    <span>Angkatan : {{ $alumni->angkatan }}</span>
                                    @if ($alumni->status_bekerja == 'bekerja')
                                        <p> {{ $alumni->bekerja }}</p>
                                    @else
                                        <p>belum bekerja</p>
                                    @endif

                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('alumni.edit', $alumni->id) }}" class="btn btn-primary"
                                            style="margin-right: 5px">Edit</a>
                                        <form action="{{ route('delete', $alumni->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
@endsection
