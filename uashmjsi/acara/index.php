<?php
    session_start();

    if( !isset($_SESSION["login"]) ) {
        header("Location: ../login.php");
        exit;
    }

    $conn = mysqli_connect('localhost', 'root', '', 'humanis');

    $sql = "SELECT * FROM acara"; 
    $result = mysqli_query($conn,$sql);

    include('../config/css_library.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styleacara.css?v=1.0">
    <link rel="icon" type="images/png" sizes="200x200" href="../assets/img/LogoH.png">
    <title>A c a r a</title>
</head>

<body style="background-color: #B8D1EA">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-bar">
                    <div class="judul">
                        <h2>HMJ SISTEM INFORMASI</h2>
                    </div>
                    
                    <div id="menu">
                        <nav>
                            <ul>
                                <li><a href='../index.php'>Home</a></li>
                                <ul>
                                    <li><a href="BAGAN">Bagan Anggota</a></li>
                                </ul>                    
                                <li><a href='../acara/index.php'>Acara</a>
                                <li><a href='../kas_masuk/index.php'>Kas</a>
                                <li><a href='index.php'>Presensi</a></li>
                                <li><a href='../anggota/index.php'>Data Anggota</a></li>
                                <li><a href="../logout.php" class="tbl-biru">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="table">
        <h1>Acara</h1>
        <table class='table table-hover, table table-bordered black, table border-black, table table-dark'>
            <thead class="thead-dark">
            <tr>
                <th>Event</th>
                <th>Deskripsi Event</th>
                <th>Tanggal</th>
            </tr>
            </thead>
            <?php foreach ($result as $acara) { ?>

            <tr>
                <td><?= $acara["nama_acara"]?></td>
                <td><?= $acara["desc_acara"]?></td>
                <td><?= $acara["tgl_mulai"]?></td>
            </tr>
            <?php } ?>
        </table>

        <div class="back">
            <p><a href="../index.php">Back</a></p>
        </div>
    </div>
    
</body>
</html>


