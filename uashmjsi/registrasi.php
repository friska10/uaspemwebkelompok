<?php

require 'config/conn.php';

    if( isset($_POST["register"]) ) {

        if( registrasi($_POST) > 0 ){
            //set session
            $_SESSION["register"] = true;
            
            header("Location: login.php");
            exit;

            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                    </script>";
        } else{
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleregistrasi.css">
    <link rel="icon" type="images/png" sizes="100x100" href="assets/css/LogoH.png?v=1.0">
    <title>R e g i s t e r</title>
    <style>
        label{
             display: block;
        }
    </style>
</head>
<body>

<div class="container-home" id="home">
        <div class="logo">
            <img src="HumanisUEU.png">
        </div>

    <form action="" method="post">

                <div class="form">

                <div class="container">
                        <h1>Registrasi User</h1>
                </div>


                <div class="textbox1">
                    <br><label1 for="username">Username : </label1></br>
                    <input type="text" name="username" id="username">
                </div>
    
                <div class="textbox2">
                    <label2 for="password">Password : </label2>
                    <input type="password" name="password" id="password">
                </div>
                

                <div class="textbox">
                    <label for="password2">Konfirmasi Paswword : </label>
                    <input type="password" name="password2" id="password2">
                </div>

                <div class="button">
                    <button type="submit" name="register">Register</button>
                </div>

                </div>
    </form>
</body>
</html>