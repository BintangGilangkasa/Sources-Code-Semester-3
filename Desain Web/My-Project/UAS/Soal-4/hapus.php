<?php
include 'koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
    if (mysqli_query($connect, $query)) {
        echo "Data berhasil dihapus.";
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
