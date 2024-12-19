<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form name="session" method="POST" action=""> 
    <p>Form Login</p>
    <p>User Name <input type="text" name="nama"/></p>
    <p>Password <input type="password" name="pass"></p>
    <input type="submit" name="Login" value="Login"/>
    </form>
</body>
</html>

<?php
    session_start();
    if(isset($_POST['Login'])) {
        if(($_POST['nama']=="") && ($_POST['pass']=="")) { 
            echo "User Name dan Password masih Kosong";
            session_destroy();
        
        }else{
        // user = "Bintang" & password = "1234"
        if (($_POST['nama']=="Bintang") && ($_POST['pass']=="1234")){
            $_SESSION['login']=1;
            $_SESSION['username']=$_POST['nama'];
        }

        if ((isset($_SESSION['login'])) and ($_SESSION['login']==1)){
        header("location: submit_form_login.php");
        exit();
        }
        }
    }

?>