<?php
    function faktorial($n){
        if ($n==0)
        return 1;

        else;
        return $n * faktorial($n - 1);
    }

    $n = (float) readline("Masukan angka : ");

    echo "Hasil dari {$n} adalah : ". faktorial($n)."";
?>