<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// $ep = $_GET["eps"];
$code = $_GET["code"];
// $eps = query("SELECT * FROM anime INNER JOIN episode ON anime.id = episode.id ");

// pagination
// konfigurasi
$jumlahDataPerHalaman = 1;
$jumlahData = count(query("SELECT * FROM episode WHERE code = '$code'"));
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["eps"])) ? $_GET["eps"]:1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$nonton =query( "SELECT * FROM episode WHERE code = '$code' LIMIT $awalData, $jumlahDataPerHalaman ");
if(isset($_POST["next"])){
  $ep = $ep + 1;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
        <title>Bali Desu | Nonton Anime</title>
        <link rel="stylesheet" href="asset/styleanime.css">   
    </head>
    <body class="body">
        <div class="header">
            <h1>Bali <span>Desu</span></h1>
        </div>
        <div class="navbar">
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="genre.php">Genre List</a>
                <a href="animelist.php">Anime List</a>
                <a href="jadwal.php">Jadwal Rilis</a>
                <a href="logout.php "onclick ="return confirm('yakin Log out?');">Log Out</a>
            </div>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari..." required>
            <button class="search-button">Cari</button>
            </div>
        </div>
<div class="line"></div>
        </div>
   <nav class="halaman">
 
        <div class="kotak1">
            <div class="judul">
                <?php foreach ($nonton as $nn) :?>
        <h2><?= $nn["episode"] ?>  </h2>
            </div>
        </div>
       <div class="menu">

              

                <?php if ($halamanAktif > 1) : ?>
                <div class="tombolkiri"><a href="?eps=<?= $halamanAktif - 1 ?>&code=<?= $code?>">Prev Episode</a></div>
                <?php endif ?>
                <div class="tombol"><a href="anime.php?id=<?=$nn["id"]?>">menu</a></div>
                <?php if ($halamanAktif < $jumlahHalaman) : ?>
               <div class="tombolkanan"><a href="?eps=<?= $halamanAktif + 1 ?>&code=<?= $code?>">Next Episode</a></div>
                <?php endif ?> 
       </div> 
       <div class="video">
        <video control controls src="vid/<?=$nn["vidio"]?>"></video>    
    </div>
        <?php endforeach ?>
   
  
        <div class="kotak1">
            <div class="judul">
        <h3>Semua Episode</h3>
            </div>
        </div>
       <div class="semuaepisode">
        <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
    <?php if($i == $halamanAktif) : ?>
    <a href="?eps=<?= $i;?>&code=<?= $code?>" style="font-weight: bold ;color: black;" ><?= $i; ?></a>
    <?php else : ?>
        <a href="?eps=<?= $i;?>&code=<?= $code?>"><?= $i; ?></a>
    <?php endif ?>
    <?php endfor ?>
       </div>

      
       
   </nav>
   <footer>
    <div class="line-footer"></div>
    <div class="footer_info">
        <div class="footer_width about">
            <h2>About</h2>
            <p>Bali Desu Streaming Anime Subtitle Indonesia 
            format lengkap dan mantap.</p>
        </div>
        <div class="footer_width tips">
            <h2>Tips</h2>
            <p>Ayo nonton anime dan ingatlah bekerja jangan jadi wibu yang pengangguran!</p>
        </div>
        <div class="footer_width info">
            <h2>Info</h2>
            <p>Untuk kenyamanan dan kemudahan silahkan gunakan Browser Google Chrome.</p>
        </div>
    </div>
    <div class="copy-right">
        <p>All rights reserved © Copyright 2024, Bali Desu. Created by kelompok 7 With Powered by HTML,CSS & PHP</p>
    </div>
</footer> 
    </body>
</html>