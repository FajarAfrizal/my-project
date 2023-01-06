<!DOCTYPE html>
<html>

<head>
    <title>Present Value</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: blue;">

    <?php
    $besar_pinjaman = $_POST["besar_pinjaman"];
    $bunga = $_POST["bunga"];
    $jangka = $_POST["waktu"];
    function hitungan($besar_pinjaman, $jangka, $bunga)
    {
        $bunga_bulan = (1 + $bunga / 100);
        $hitungan = pow($bunga_bulan, -$jangka);
        $hasil = $besar_pinjaman * $hitungan;
        return $hasil;
    }
    function format_rupiah($angka)
    {
        $jadi = "Rp " . number_format($angka, 2, ',', '.');
        return $jadi;
    }
    ?>


    <div class="text-center" style="margin-top: 400px;">
        <div class="container d-flex align-items-center justify-content-center " style="">
            <div class="card-body bg-white">
                Jumlah Pinjaman = <?php echo format_rupiah($besar_pinjaman); ?><br>
                Jangka waktu = <?php echo $jangka; ?> Bulan <br>
                Bunga = <?php echo $bunga; ?>% <br>


                <?php
                $mo = $besar_pinjaman;
                $future = hitungan($besar_pinjaman, $jangka, $bunga);
                $hasil_akhir = $mo * $future;
                echo 'Total Setelah ' . $jangka . ' ' . 'Bulan Yaitu : ' . format_rupiah($future) . '<br>';
                ?>
                <a href="" class="btn btn-danger mt-3">Back</a>
            </div>
        </div>
    </div>


</body>

</html><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start"></span>