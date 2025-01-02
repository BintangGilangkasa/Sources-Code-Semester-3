<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="post" action="tambah.php">
        <label for="nim">NIM: </label><br>
        <input type="text" name="nim" required><br>
        <label for="nama">Nama: </label><br>
        <input type="text" name="nama" required><br>
        <label for="alamat">Alamat: </label><br>
        <textarea name="alamat" required></textarea><br>
        <label for="jurusan">Jurusan: </label><br>
        <input type="text" name="jurusan" required><br>
        <input type="submit" value="Tambah">
    </form>

    <h2>Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['NIM'] . "</td>";
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['Alamat'] . "</td>";
            echo "<td>" . $row['Jurusan'] . "</td>";
            echo "<td>
                    <a href='edit.php?nim=" . $row['NIM'] . "'>Edit</a> |
                    <a href='hapus.php?nim=" . $row['NIM'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
