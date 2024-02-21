<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
$id = $_GET["idEps"];
$home = $_GET["id"];
$anime = query("SELECT * FROM episode WHERE idEps = $id")[0];
if(isset($_POST["submit"])) {
    if(ubaheps($_POST) > 0) {
        echo "
            <script>
            let id = $home
                alert('data berhasil diubah!');
                document.location.href = 'edit.php?id=' + id;
            </script>
        ";
    }else {
        echo "
            <script>
            let id = $home
                alert('data gagal diubah!');
                document.location.href = 'edit.php?id=' + id;
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
    <title>Admin BD | Edit Episode</title>
</head>
<body>
<div class="sidebar">
        <h1>Admin</h1>
        <ul>
            <li class="text-start"><a href="halamanAdmin.php">List Anime</a></li>
            <li class="text-start"><a href="tambahanime.php">Tambah Anime</a></li>
            <li class="text-start"><a href="logout.php">Log Out</a></li>
            <li class="text-start"><a href="edit.php?id=<?=$anime["id"] ?>&code=<?= $anime["code"] ?>">Back</a></li>
        </ul>
    </div>
    <h1 class="list">Edit Episode</h1>
    <div class="col-md-9 main-content">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $anime["idEps"]; ?>">
        <input type="hidden" name="vidiolama" value="<?= $anime["vidio"]; ?>">
    <div class="form-group">
                <label for="judul">Judul Anime:</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Episode" value="<?= $anime["episode"]; ?>">
            </div>

            <div class="form-group">
                <label for="eps">Episode :</label>
                <input type="number" class="form-control" id="eps" name="eps" placeholder="Masukkan No Episode" maxlength="5" value="<?= $anime["eps"]; ?>">
            </div> 

            <div class="form-group">
                <label for="tglrilis">Tanggal Rilis :</label>
                <input type="text" class="form-control" id="tglrilis" name="tglrilis" placeholder="Masukkan tanggal rilis" min="0" max="10" value="<?= $anime["tglRilisEps"]; ?>">
            </div>
      
            <div class="form-group">
                <label for="vidio">Ganti Vidio : </label>
                <video control controls src="vid/<?=$anime["vidio"]?>"></video>    
                <input type="file" class="form-control file" id="vidio" name="vidio">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Edit Anime</button>
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