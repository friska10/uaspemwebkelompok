<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'config/conn.php';

 if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ){
            
            //set session 
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="assets/css/stylelogin.css?v=1.0"">
    <link rel="icon" type="png" sizes="100x100" href="assets/img/LogoH.png">
    <title>Selamat Datang</title>
</head>
<body>

<div class="container-home" id="home">
        <div class="logo">
            <img src="HumanisUEU.png">
        </div>
            
<form action="" method="post">

<div class="form">

<div class="container">
    <h1>LOGIN</h1>
</div>

    <div class="textbox">

            <label for="username">Username : </label>
            <input type="text" name="username" id="username">

    </div>
       
    <div class="textbox">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
                   
    </div>
    
    <div class="login">
        <button type="submit" name="login">Login</button>
        <button type="submit" name="register"><a href="registrasi.php">Regist</a></button>
    </div>  

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic; margin-left:130px;">Username atau Password salah</p>
    <?php endif; ?>
    

</div>
</form>

</body>
</html>