<?php
include 'koneksikexampp.php';
date_default_timezone_set("Asia/Jakarta");

$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_object($identitas);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Website <?= $d->nama ?></title>
</head>

<body>

    <!-- box menu mobile -->
    <div class="box-menu-mobile" id="mobileMenu">
        <span onclick="hideMobileMenu()">Close</span>
        <ul class="text-center">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="tentang-sekolah.php">Tentang</a></li>
            <li><a href="jurusan.php">Jurusan</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </div>

    <!-- bagian header -->
    <div class="header">

        <div class="container">

            <div class="header-logo">
                <img src="uploads/identitas/<?= $d->logo ?>" width="70" alt="">
                <h2><a href="index.php"><?= $d->nama ?></a></h2>
            </div>

            <ul class="header-menu">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang-sekolah.php">Tentang</a></li>
                <li><a href="jurusan.php">Jurusan</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>

            <div class="mobile-menu-btn text-center">
                <a href="#" onclick="showMobileMenu()">Menu</a>
            </div>

        </div>

    </div>

    <div class="preloader">
        <div class="loading">
            <img src="/assets/img/loader/1481.gif">
            <p>Harap Tunggu</p>
        </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><strong>Tekan ini untuk keatas!</strong></button>