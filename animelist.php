<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
$animeList = quera("SELECT judul,id FROM anime ORDER BY judul ASC");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Bali Desu| Anime Desc</title>
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styleanimelist.css"> 
    <title>Document</title>
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
    <ul>
    <h4>A</h4>

 <?php foreach($animeList as $al) : ?>
    <?php $in = "A" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>B</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "B" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>C</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "C" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>D</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "D" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>E</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "E" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>F</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "F" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>G</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "G" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>H</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "H" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>I</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "I" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>J</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "J" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>K</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "K" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>L</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "L" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>M</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "M" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>N</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "N" ?>
    <?php if( $in === $al["judul"][0]) : ?>
        <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>O</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "O" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>P</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "P" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>Q</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "Q" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>R</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "R" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>S</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "S" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>T</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "T" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>U</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "U" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>V</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "V" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>W</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "W" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>X</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "X" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>Y</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "Y" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul>   
    <ul>
    <h4>Z</h4>
 <?php foreach($animeList as $al) : ?>
    <?php $in = "Z" ?>
    <?php if( $in === $al["judul"][0]) : ?>
     <div class = listanime><a href="anime.php?id=<?=$al["id"];?>"><li><?= $al["judul"] ?></li></a></div>
<?php endif ?>
<?php endforeach ?>
    </ul> 
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