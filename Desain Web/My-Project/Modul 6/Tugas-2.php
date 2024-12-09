<?php
    $nama = [
        1 => "Vina",
        2 => "Bintang",
        3 => "Alya",
        4 => "Diah",
        5 => "Nabila",
        6 => "Andika",
        7 => "Shafa", 
        8 => "Wildan",
        9 => "Milan",
        10 => "Fachry",
        11 => "Faruq", 
        12 => "Stenly", 
        13 => "Lintang"
    ];

    // Mengakses elemen pertama dari array
    $first_name = $nama[1];
    echo $first_name . "<br>";  // Output: Vina

    // Menggunakan array_pop untuk menghapus dan mengambil elemen terakhir
    $fruit = array_pop($nama);
    echo $fruit . "<br>";  // Output: Lintang

    // Menggunakan implode untuk menggabungkan elemen array range(1, 5) dengan pemisah "-"
    echo implode("-", range(1, 5)) . "<br>";  // Output: 1-2-3-4-5

    // Menghitung jumlah elemen dalam array
    var_dump(count($nama));  // Output: int(12)

    echo "<br>";
    
    //
    $mode = end($nama); // $mode = 'foot';
    
    echo $mode
?>
