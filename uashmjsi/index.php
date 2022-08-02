<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="images/png" sizes="200x200" href="assets/img/LogoH.png">
    <title>Home</title>
</head>
<body>

  <div class="halaman">
    <div class="container">
        <div class="box1">
            
        </div>
    </div>

    <div class="top-bar">
        <div class="judul">
            <h2>HMJ SISTEM INFORMASI</h2>
        </div>
        <div id="menu">
            <nav>
                <ul>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href="acara/index.php">Acara</a></li>
                    <li><a href='kas_masuk/index.php'>Kas</a></li>
                    <li><a href='presensi/index.php'>Presensi</a></li>
                    <li><a href='anggota/index.php'>Data Anggota</a></li>
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>




    <div class="container-home" id="home">
        <div class="logo">
            <img src="HumanisUEU.png">
        </div>
        <div class="deskripsi">
            <h3>VISI MISI</h3>
            <p>VISI</p>
            <p>Menjadikan mahasiswa sistem informasi sebagai garda terdepan untuk menghadapi era digital serta penyalur bakat mahasiswa baik dalam bidang akademik dan non-akademik untuk menciptakan modal pengalaman dimasa depan</p> <br></br>
            <p>MISI</p>
            <p>1. Menjadikan mahasiswa sistem informasi yang memiliki kualitas unggul di masa yang akan datang</p>
            <p>2. Mampu menjadi wadah bagi mahasiswa yang ingin menyalurkan bakat baik dalam bidang akademik dan non-akademik</p>
            <p>3. Menjalankan visi, misi, serta program kerja yang sudah ada sebelumnya.</p>
        </div>
    </div>

</div>
</body>
</html>


