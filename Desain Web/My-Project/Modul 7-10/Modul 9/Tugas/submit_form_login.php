<?php
    session_start();
    if ((isset($_GET['aksi'])) and ($_GET['aksi']=="logout")){
        session_destroy();
        header("refresh; 3; header.php");
    }

    if(isset($_SESSION['login'])){
    $username = $_SESSION['username'];
        echo "<center>";
        echo " <h2>ABSENSI ANGKASA PROJECT</h2>";
        echo "<p> Username : <b> $username </b></p>";
        echo"<p><a href='menu_1.php'>Menu 1 |&nbsp</a><a
        href='menu_2.php'> Menu 2 |&nbsp</a><a href='menu_3.php'> Menu3</a></p>";
    }else{
        header("location:header.php");
    }
?>
    <a href="?aksi=logout">Logout</a> </body>
    </center>