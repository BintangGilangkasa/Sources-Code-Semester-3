<?php
session_start();
if ((isset($_GET['aksi'])) and ($_GET['aksi']=="logout")){
    session_destroy();
    header("refresh; 2; proses_login.php");
}

if (isset($_SESSION['login'])) {
$username = $_SESSION['username'];
    echo "<center>";
    echo " <h2>SELAMAT DATANG $username</h2>";

}else {
    header("location:proses_login.php");
}
?>

<a href="?aksi=logout" type="submit" value="Logout">Logout</a></body>
