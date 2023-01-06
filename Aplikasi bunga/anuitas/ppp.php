<!DOCTYPE html>
<html>

<head>
    <title>Anuitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <?php
    $besar_pinjaman = $_POST["besar_pinjaman"];
    $bunga = $_POST["bunga"];
    $waktu = $_POST["waktu"];
    $perbulan = $bunga / 12;
    function hitungan($besar_pinjaman, $waktu, $bunga)
    {
        $bunga_bulan = ($bunga / 12) / 100;
        $pembagi = 1 - (1 / pow(1 + $bunga_bulan, $waktu));
        $hasil = $besar_pinjaman / ($pembagi / $bunga_bulan);
        return $hasil;
    }
    function rupiah($angka)
    {
        $jadi = "Rp " . number_format($angka, 2, ',', '.');
        return $jadi;
    } ?>

    <div class="card shadow  " style="width: 400px; height: 200px; margin: 50px auto; background-color:aqua;">
        <div class="text-center mt-5">
            Jumlah Pinjaman = <?php echo rupiah($besar_pinjaman); ?><br>
            Jangka waktu = <?php echo $waktu; ?> Bulan <br>
            Bunga = <?php echo $bunga; ?>% <br>
        </div>
    </div>

    <div class="mr-5 ml-5" style="margin-left: 50px; margin-right:50px; margin-top: 30px;">
        <table class="table table-primary ">
            <tr>
                <th>Angsuran ke -</th>
                <th>Angsuran Pokok</th>
                <th>Angsuran Bunga</th>
                <th>Total Angsuran</th>
                <th>Sisa Hutang</th>
            </tr>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td><b><?php echo rupiah($besar_pinjaman); ?></b></td>
            </tr>

            <?php

            $no = 0;
            $hutang = $besar_pinjaman;
            do {
                $no++;
                $anuitas = hitungan($besar_pinjaman, $waktu, $bunga);
                $uang_bunga = $hutang * (($bunga / 12) / 100);
                $ang_pokok = $anuitas - $uang_bunga;
                $hutang = $hutang - $ang_pokok;
                $cicilan = $uang_bunga + $ang_pokok;

                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . rupiah($ang_pokok) . "</td>";
                echo "<td>" . rupiah($uang_bunga) . "</td>";
                echo "<td>" . rupiah($cicilan) . "</td>";
                echo "<td>" . rupiah($hutang) . "</td>";
                echo "</tr>";
            } while ($no < $waktu); ?>
        </table>
    </div>
    <a href="" class="ms-5 btn btn-danger mt-3">Back</a>
</body>

</html><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start"></span>