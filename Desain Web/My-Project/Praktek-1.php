<?php
    echo "========================", "<br>";

    $saldoawal = 2000000;
    $bunga = 0.03;
    $bulan = 11;

    $saldoakhir = $saldoawal * pow((1 + $bunga), $bulan);

    echo "Saldo akhir setelah ". $bulan." bulan adalah : Rp. ". $saldoakhir, "<br>";

    echo "========================";
?>