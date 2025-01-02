<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (NIM, Nama, Alamat, Jurusan) VALUES ('$nim', '$nama', '$alamat', '$jurusan')";
    if (mysqli_query($connect, $query)) {
        echo "Data berhasil ditambahkan.";
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
