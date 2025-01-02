<?php
session_start();
if (isset($_POST['Login'])) {
    $user = [
        'Ali'=> 'pass123',
        'Budi' => 'pass456'
    ];

    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if (empty($username) || empty($password)){
        echo "Login Gagal";
        session_destroy();
    } elseif (!array_key_exists($username, $user)) {
        echo "Username tidak tersedia";
        session_destroy();
    } elseif ($user[$username] != $password){
        echo "Password anda salah";
        session_destroy();
    } else{
        $_SESSION['login'] = 1;
        $_SESSION['username'] = $username;
        header('location:submit_form_login.php');
        exit();
    }
        
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bang</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Login UAS</h2>

    <form name="session" method="POST" action="">
        <p>Username   <input type="text" name="username" placeholder="username"></p>
        <p>Password   <input type="password" name="password" placeholder="password"></p>
        <input type="submit" name="Login" value="Login">
    </form>
</body>
</html>