<?php
    session_start();
    if ((isset($_GET['aksi'])) and ($_GET['aksi']=="logout")){
        session_destroy();
        header("refresh; 3; proses_login.php");
    }

    if(isset($_SESSION['login'])){
    $nama = $_SESSION['username'];
        echo "<center>";
        echo "<p> Selamat Datang <b>$nama</b></p>";
        echo"<p><a href='menu_1.php'>Menu 1&nbsp</a><a
        href='menu_2.php'>Menu 2&nbsp</a><a href='menu_3.php'>
        Menu3&nbsp</a></p>";
    }else{
        header("location:proses_login.php");
    }
?>
    <a href="?aksi=logout">Logout</a> </body>
    </center>
