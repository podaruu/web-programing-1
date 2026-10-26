<title>Program Menghitung Tarif Parkir</title>
<?php
    $kendaraan = "Mobil";
    $jam = 30;
    if ($kendaraan == "Motor") {
        $jamPertama = 3000;
        $jamBerikutnya = 2000;
        $tarifMaksimal = 15000;
        $tarifInap = 20000;
    }
    elseif ($kendaraan == "Mobil") {
        $jamPertama = 5000;
        $jamBerikutnya = 3000;
        $tarifMaksimal = 30000;
        $tarifInap = 50000;
    }
    else {
        echo "Jenis kendaraan tidak tersedia";
        exit;
    }
    if ($jam <= 0) {
        $total = 0;
    }
    else {
        $inap = floor($jam / 24);
        $sisaJam = $jam % 24;
        if ($sisaJam == 0) {
            $biayaBiasa = 0;
        }
        elseif ($sisaJam == 1) {
            $biayaBiasa = $jamPertama;
        }
        else {
            $biayaBiasa = $jamPertama +
                ($sisaJam - 1) * $jamBerikutnya;
        }
        if ($biayaBiasa > $tarifMaksimal) {
            $biayaBiasa = $tarifMaksimal;
        }
        $total = ($inap * $tarifInap) + $biayaBiasa;
    }
    echo "Kendaraan : $kendaraan <br>";
    echo "Lama Parkir : $jam jam <br>";
    echo "Total Bayar : Rp " . number_format($total, 0, ',', '.');
?>