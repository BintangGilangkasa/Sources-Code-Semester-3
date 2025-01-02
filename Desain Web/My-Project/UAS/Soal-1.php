<?php
session_start();

if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];

    if (!is_numeric($nilai)|| $nilai < 0 || $nilai > 100) {
        echo "Inputan hasus angka dan range nilai 0-100";
    } else {
        if ($nilai >= 90 && $nilai <= 100){
            $grade = "A";
        } elseif ($nilai >= 76 && $nilai <= 89){
            $grade = "B";
        } elseif ($nilai >= 60 && $nilai <= 75){
            $grade = "C";  
        } elseif ($nilai >= 50 && $nilai <= 59){
            $grade = "D";
        } else{
            $grade = "E";
        }
        
    } switch ($grade){
        case 'A':
            $keterangan = "Lulus dengan Pujian";
            break;
        case 'B':
            $keterangan = "Lulus Baik";
            break;
        case 'C':
            $keterangan = "Lulus Cukup";
            break;
        case 'D':
            $keterangan = "Tidak Lulus";
            break;
        case 'E':
            $keterangan = "Gagal";
            break;
    }
    echo "<center>";
    echo "Nilai anda: <b>$nilai</b><br>";
    echo "Grade: <b>$grade</b><br>";
    echo "Keterangan: <b>$keterangan</b><br>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akurasi Nilai</title>
</head>
<body>
<form method="post" action="">
    <label for="nilai">Masukkan Nilai Anda: </label><br>
    <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
    
</body>
</html>