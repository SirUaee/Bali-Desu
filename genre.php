<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
$tampilGenre = query("SELECT * FROM genre ORDER BY genre ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <link rel="stylesheet" href="asset/stylegenre.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bali Desu | Genre List</title>
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
 <div class="genre">Genre List</div>
 <div class="genre-container">
    <?php foreach ($tampilGenre as $tg) : ?>
        <a href="listgenre.php?genre=<?=$tg["genre"] ?>"><div class="box"><?= $tg["genre"] ?></div></a>
        <?php endforeach ?>
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