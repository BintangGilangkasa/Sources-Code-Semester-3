<?php
include 'koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];

        $query = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE nim='$nim'";
        if (mysqli_query($connect, $query)) {
            echo "Data berhasil diperbarui.";
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post">
        <label for="nama">Nama: </label><br>
        <input type="text" name="nama" value="<?= $data['Nama']; ?>" required><br>
        <label for="alamat">Alamat: </label><br>
        <textarea name="alamat" required><?= $data['Alamat']; ?></textarea><br>
        <label for="jurusan">Jurusan: </label><br>
        <input type="text" name="jurusan" value="<?= $data['Jurusan']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
