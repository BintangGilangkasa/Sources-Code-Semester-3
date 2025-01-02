<?php
$bilangan = range(1, 50);

function cek_genap($bilangan){
    return $bilangan % 2 == 0;
}

$jumlah_genap = 0;
$angka_genap = [];

foreach ($bilangan as $bil) {
    if(cek_genap($bil)){
        $jumlah_genap++;
        $angka_genap[]= $bil;
    }
}

echo "Jumlah bilangan genap: $jumlah_genap<br>";
echo "Daftr angka genap: ".implode(",", $angka_genap)."<br>"
?>