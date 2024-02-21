<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
$id = $_GET["id"];

$an = query("SELECT * FROM anime WHERE id = $id")[0];
$eps = query("SELECT * FROM anime INNER JOIN episode ON anime.id = episode.id ORDER BY idEps DESC");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Bali Desu| Anime Desc</title>
      <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
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
        <form action="cari.php" method="post">
        <input type="text" name="keyword" class="search-input" placeholder="Cari..." required>
        <button type="submit" class="search-button" name="cari">Cari</button>
    </form>
 </div> 
        </div>
<div class="line"></div>

   <div class="halaman">
 
        <div class="kotak1">
            <div class="judul">
                <h2>Streaming <?= $an["judul"] ?></h2>
            </div>
        </div>
        <div class="identitas">
            <div class="gambar">
            <img src="img/<?= $an["poster"];?>" alt="">
            </div>
            <div class="keterangan">
                <h4>Judul: <?=$an["judul"];?></h4>
                <h4>Skor:  <?=$an["skor"];?></h4>
                <h4>Total Episode:  <?=$an["total_episode"];?></h4>
                <h4>Status: <?=$an["status"];?> </h4>
                <h4>Durasi: <?=$an["durasi"];?></h4>
                <h4>Tanggal Rilis: <?=$an["tgl_rilis"];?></h4>
                <h4>Studio: <?=$an["studio"];?></h4>
                <h4>Genre: <?=$an["genre"];?></h4>
            </div>
        </div>
        <div class="kotakkotak">
            <div class="episode1">
                <div class="kiri1">
                    Episode 
                </div>
            </div>
            <div class="episodeatas">
                <?php $i = 1 ?>
<?php foreach($eps as $e) : ?>
 <?php if ($id == $e["id"]) { ?>
      <ul>
    <li>

    <a href="nonton.php?code=<?= $e["code"] ?>&eps=<?= $e["eps"]?>&halaman=<?= $i?>"> <?= $e["episode"] ;?></a>
    <span><?= $e["tglRilisEps"] ?></span>

    </li>
        
</ul>
<?php } ?>
<?php $i++ ?>
    <?php endforeach ?>
        </div>
        </div>
   </div>
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
