@extends('layout.main')
@section('content')
    <div class="pull-right my-2 animate__animated animate__bounceInLeft ">
        <a class="btn btn-primary" style="margin-top: 70px" href="{{ route('create') }}"> Create</a>
    </div>  
    <div class=" mb-4 me-5 " style="display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:20px; margin-top:10px">

        @foreach ($tabungan as $item)
            <div class="card  animate__animated animate__bounceInLeft rounded p-3 box-shadow" style="background-color: #2B3A55; color: white;">
                <div class="card-body">
                    <h3 class="">{{ $item->name }}</h3>
                    <div class=" text-white ">
                        @if ($item['saldo'] == null)
                            Saldo Anda : <?php echo format_rupiah(0)?>
                        @else
                          Saldo Anda : <?php echo format_rupiah($item->saldo) ?>
                        @endif
                    </div>
                    <br>
                        Nis : {{ $item->nis }}
                        <br>
                        Rayon : {{ $item->class->name }} 
                    <div class="d-flex">
                        <a class="btn btn-primary" href="{{ route('wd', $item->id) }}"> Tarik Saldo
                            <i class="fa-solid fa-money-from-bracket"></i>
                        </a>
                        <a href="{{ route('depo', $item->id) }}" class="btn btn-success" style="margin-left: 10px"> Tambah Saldo
                            {{-- <i class="fa-solid fa-square-plus"></i> --}}
                        </a>
                        <a href="{{ route('edit', $item->id) }}" class="btn btn-warning" style="margin-left: 10px"> Edit</a>
                        <form action="{{ route('delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="margin-left: 10px"  class="btn btn-danger">delete</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <?php 
    function format_rupiah($angka)
    {
        $jadi = "Rp " . number_format($angka, 2, ',', '.');
        return $jadi;
    }
    ?>
@endsection
