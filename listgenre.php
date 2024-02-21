<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$genre = $_GET["genre"];
$tampilGenre = query("SELECT * FROM anime WHERE genre LIKE '%$genre%'")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/styleindex.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Desu |  Genre</title>
</head>
<body>
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
<div class="all">
    <div class="ongoing">
        Hasil cari dari "<?= $genre ?>"
    </div>
    <div class="container">

<?php foreach ($tampilGenre as $row) : ?>
<div class="box">
<a href="anime.php?id=<?=$row["id"];?>"><img src="img/<?= $row["poster"];?>"alt=""></a>
<div class="judul"><?=$row["judul"] ?></div>
<div class="episode">Episode <?=$row["total_episode"] ?></div>
<div class="tgl"><?= $row["tgl_rilis"] ?></div>
<div class="jadwal"><?= $row["jadwal"] ?></div>
</div>
    <?php endforeach ?>
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
