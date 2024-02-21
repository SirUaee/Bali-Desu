<?php 

require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$jadwal = query("SELECT id,judul,jadwal FROM anime ORDER BY jadwal DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/stylejadwal.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Bali Desu | Jadwal Rilis</title>
</head>
<body class="body">
<div class="header-malas">
    <h1>Bali <span>Desu</span></h1>
</div>
<div class="navbar-malas">
    <div class="nav-malas">
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
<div class="jadwal-container">
    <div class="jadwal">
        <div class="judul">
            <h5 class=" text-center">Jadwal Rilis<h5>
            <div class="line2"></div>
            <p class=" text-center">Note: Jadwal bisa berubah sewaktu waktu</p>
        </div>
        <div class="container text-center">
        <div class="grid-container">
        <div class="grid-item">
            <div>
<h3>Minggu</h3>
</div>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Minggu") : ?>
            <div class="anime">
            <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="grid-item">
<h3>Senin</h3>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Senin") : ?>
            <div class="anime">
                <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>

            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="grid-item">
<h3>Selasa</h3>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Selasa") : ?>
            <div class="anime">
                <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>

            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="grid-item">
<h3>Rabu</h3>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Rabu") : ?>
            <div class="anime">
                <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>

            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="grid-item">
<h3>Kamis</h3>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Kamis") : ?>
            <div class="anime">
                <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>

            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="grid-item">
<h3>Jumat</h3>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Jumat") : ?>
            <div class="anime">
                <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>

            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="grid-item">
<h3>Sabtu</h3>
    <?php foreach($jadwal as $jd) : ?>
        <?php if($jd['jadwal'] == "Sabtu") : ?>
            <div class="anime">
                <a href="anime.php?id=<?= $jd["id"] ?>"><?= $jd['judul']; ?></a>

            </div>
            <?php endif; ?>
        <?php endforeach; ?>
            </div>
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