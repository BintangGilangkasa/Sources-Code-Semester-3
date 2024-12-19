<?PHP
    $expire = time() + 10;
    setcookie('netter', 1, $expire);
?>
<html>
<head>
    <title>Cookies</title>
</head>
<body>
    <?PHP
    if (isset($_COOKIE['netter'])) {
        echo "Selamat Datang Kembali";
    } else {
        echo "Selamat Datang, Ini Kunjungan Anda Pertama Kalinya";
    }
    ?>
</body>
