<?php 
require 'function.php';

session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"] != true ) {
    header("Location: login.php");
    exit;
}



$anime = query("SELECT * FROM anime");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/stylelistadmin.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Admin BD | Home Admin</title>
</head>
<body>
<div class="sidebar">
        <h1>Admin</h1>
        <ul>
            <li class="text-start"><a href="halamanAdmin.php">List Anime</a></li>
            <li class="text-start"><a href="tambahanime.php">Tambah Anime</a></li>
            <li class="text-start"><a href="logout.php">Log Out</a></li>
        </ul>
    </div>  
    <div class="col-md-9 main-content">
        
        </div>
       <h1 class="list">List Anime</h1>
    <div class="content table-responsive">
        <table class="table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Code</th>
                <th scope="col">Skor</th>
                <th scope="col">Status</th>
                <th scope="col">Total Episode</th>
                <th scope="col">Durasi</th>
                <th scope="col">Tanggal Liris</th>
                <th scope="col">Studio</th>
                <th scope="col">Genre</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Poster</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>        
            <tbody>
                <tr>
        <?php $i = 1; ?>
        <?php foreach($anime as $row) : ?>
                <td><?= $i ?></td>
             
                <td><?= $row["judul"]; ?></td>
                
                <td><?= $row["code"]; ?></td> 
               
                <td><?= $row["skor"]; ?></td>
                
                <td>   <?= $row["status"]; ?></td>
              
                <td>   <?= $row["total_episode"]; ?></td>
              
                <td>  <?= $row["durasi"]; ?></td>
                
                <td>  <?= $row["tgl_rilis"]; ?></td>
               
                <td>   <?= $row["studio"]; ?></td> 
               
                <td>  <?= $row["genre"]; ?></td> 
              
                <td>   <?= $row["jadwal"]; ?></td> 
                
                <td class="img">  <img src="img/<?= $row["poster"];?>" alt=""></td> 
                
                 <td class="aksi">
                 <button type="button" class="btn btn-primary"><a href="edit.php?id=<?= $row["id"]; ?>&code=<?= $row["code"]; ?>">edit</a></button>
                 <button type="button" class="btn btn-danger"><a href="hapusanime.php?id=<?= $edit["id"]; ?>&code=<?= $edit["code"]; ?>"onclick = "return confirm('Apakah anda yakin?')">Hapus</a></button>
                </td>   
            
         </tr>         
        </tbody>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>
    </div>
     
</body>
</html>