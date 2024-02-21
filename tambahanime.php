<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["submit"])){
    if (tambah($_POST) > 0 ){
        echo " 
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'halamanAdmin.php';
            </script>
        ";
    }else {
        echo " 
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'halamanAdmin.php';
            </script>
        ";    
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <link rel="stylesheet" href="asset/styletambahanime.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Admin BD | Tambah Anime</title>
</head>
<body>
<div class="sidebar">
        <h1>Admin</h1>
        <ul>
            <li class="text-start"><a href="halamanAdmin.php">List Anime</a></li>
            <li class="text-start"><a href="tambahanime.php">Tambah Anime</a></li>
            <li class="text-start"><a href="logout.php">Log Out</a></li>]
        </ul>
    </div>
    <h1 class="list">Tambah Anime</h1>
    <div class="col-md-9 main-content">

    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
                <label for="judul">Judul Anime:</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Anime">
            </div>

            <div class="form-group">
                <label for="code">Kode Anime:</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="Masukkan Kode Anime" maxlength="5">
            </div> 

            <div class="form-group">
                <label for="skor">Skor:</label>
                <input type="text" class="form-control" id="skor" name="skor" placeholder="Masukkan Jumlah Skor" min="0" max="10">
            </div>
                  
            <div class="form-group position-relative">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="On Going">On Going</option>
                    <option value="Completed">Complete</option>
                </select> 
            </div>
       
            <div class="form-group">
                <label for="tipe">Total Episode:</label>
                <div class="input-group input-group-icon">
                    <i class="fas fa-question"></i>
                    <select class="form-control" id="totalEpisode" name="totalEpisode" onchange="changePlaceholder()">
                        <option value="tamat">Tamat</option>
                        <option value="unknown">Belum Diketahui</option>
                    </select>
                </div>
                <div class="form-group" id="nomorGroup">
                    <input type="text" class="form-control" id="totalEpisode" name="totalEpisode" placeholder="Masukkan Total Episode">
                </div>
            </div>
     
            <div class="form-group">
                <label for="durasi">Durasi:</label>
                <input type="text" class="form-control" id="durasi" name="durasi" placeholder="Masukan Total Durasi">
            </div>

            <div class="form-group">
                <label for="rilis">Tanggal Rilis:</label>
                <input type="text" class="form-control" id="tglrilis" name="tglrilis" placeholder="Masukkan Tanggal Dilis">
            </div>
     
            <div class="form-group">
                <label for="studio">Studio:</label>
                <input type="text" class="form-control" id="studio" name="studio" placeholder="Masukan Nama Studio">
            </div>
      
            <div class="form-group">
                <label for="pilihan">Genre:</label>
                <input type="text" class="form-control" id="pilihan" name="genre" placeholder="Masukan Genre">
            </div>
  
            <div class="form-group position-relative">
                <label for="jadwal">Jadwal Tayang:</label>
                <select class="form-control" id="jadwal" name="jadwal">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                    <option value="Random">random</option>
                    <option value="Ended">Ended</option>
                </select> 
            </div>
      
            <div class="form-group">
                <label for="poster">Pilih Poster:</label>
                <input type="file" class="form-control file" id="poster" name="poster" accept="image/*">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="/js/bootstrap.js"></script>
    <script>
        function changePlaceholder() {
            var tipe = document.getElementById("tipe").value;
            var nomorGroup = document.getElementById("nomorGroup");
    
            if (tipe === "unknown") {
                nomorGroup.style.display = "none";
            } else {
                nomorGroup.style.display = "block";
            }
        }
    </script>
</body>
</html>