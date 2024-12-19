<?php
    session_start();
    if (isset($_POST['Login'])) {
        if (isset($_POST['Login'])) {
            $user = [
                'Ali' => 'password1',
                'Bona' => 'password2',
                'Charlie' => 'password3',
                'Dede' => 'password4',
                'Emon' => 'password5',
                'Bintang' => 'password6'
            ];

            $username = ($_POST['username']);
            $password = ($_POST['pass']);

            if (empty($username) || empty($password)) {
                echo 'Username dan Password tidak boleh kosong';
                session_destroy();
            } elseif (!array_key_exists($username, $user)) { // Username tidak ditemukan
                echo 'Username tidak ditemukan';
                session_destroy();
            } elseif ($user[$username] !== $password) {
                echo 'Password salah';
                session_destroy();
            } else { // Login berhasil
                $_SESSION['login'] = 1;
                $_SESSION['username'] = $username;
                header("Location: submit_form_login.php");
                exit();
            }

        }   
    }
?>

<!-- Interface Login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentikasi User</title>
    <link href="style.css">
    
</head>

<body>
    <header>
        <h1>ABSENSI ANGKASA PROJECT</h1>
    </header>
    <form name="session" method="POST" action="">
        <h2>Login Form</h2>

        <div class="input-field">
            <p>User Name<input type="text" name="username"></p>
            <p>Password<input type="password" name="pass"></p>
        </div>

        <button type="submit" name="Login" value="Login">Login</button>
    </form>

    <footer>
        <a>&copy; Angkasa Project</a>
    </footer>
</body>

</html>