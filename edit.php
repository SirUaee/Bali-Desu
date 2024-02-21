<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
$id = $_GET["id"];

$edit = query("SELECT * FROM anime WHERE id = $id")[0];
$episode = query("SELECT * FROM episode WHERE id = $id ORDER BY idEps  DESC");
// $cd = query("SELECT * FROM episode anime INNER JOIN episode ON anime.id = episode.id ")[0];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <link rel="stylesheet" href="asset/stylelistadmin.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Admin BD | Edit </title>
</head>
<body>
    <div class="sidebar">
    <h1>Admin</h1>
        <ul>
            <li><a href="halamanAdmin.php">Back</a></li>
            <li><a href="editAnime.php?id=<?= $edit["id"]; ?>">Edit</a></li>
            <li><a href="tambaheps.php?id=<?= $edit["id"]; ?>&code=<?= $edit["code"]; ?>">Tambah Episode</a></li>
            <li><a href="hapusanime.php?id=<?= $edit["id"]; ?>&code=<?= $edit["code"]; ?>"onclick = "return confirm('Apakah anda yakin?')">Hapus</a></li>
        </ul>
    </div>
    <div class="col-md-9 main-content">
        
        </div>
        <div class="content table-responsive">
        <table class="table-bordered">
            <thead>
            <tr>
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
            </tr>
            </thead>
            <tbody> 
        <?php  ?>
        <tr>
            <td>
                <?= $edit["judul"]; ?>
            </td>
            <td>
                <?= $edit["code"]; ?>
            </td>
            <td>
                <?= $edit["skor"]; ?>
            </td>
            <td>
                <?= $edit["status"]; ?>
            </td>
            <td>
                <?= $edit["total_episode"]; ?>
            </td>
            <td>
                <?= $edit["durasi"]; ?>
            </td>
            <td>
                <?= $edit["tgl_rilis"]; ?>
            </td>
            <td>
                <?= $edit["studio"]; ?>
            </td>
            <td>
                <?= $edit["genre"]; ?>
            </td>
            <td > 
                 <?= $edit["jadwal"]; ?>
            </td>
            <td class="img">
            <img src="img/<?= $edit["poster"];?>" alt="">
         </td>
        </tr>
        </tbody> 
        </table>
        <br>
        <table class="table-bordered">
        <thead>
            <tr>
            <th scope="col">no </th>
            <th scope="col"> episode</th>
            <th scope="col"> tgl rilis</th>
            <th scope="col">  vidio</th>
            <th scope="col"> aksi </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $i = 1 ?>
<?php foreach($episode as $eps) : ?>
    <td>
            <?= $i ?>
    </td>
    <td>
        <?= $eps["episode"]; ?>
    </td>
    <td>
        <?= $eps["tglRilisEps"]; ?>
    </td>
    <td>
        <?= $eps["vidio"]; ?>
    </td>
    <td class="aksi"> 
    <button type="button" class="btn btn-primary"><a href="editEps.php?idEps=<?= $eps["idEps"]; ?>&id=<?= $edit["id"]; ?>">Edit</a></button>
    <button type="button" class="btn btn-danger">   <a href="hapusEps.php?idEps=<?= $eps["idEps"]; ?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a></button>
    </td>
</tr>
</tbody>    
<?php $i++ ?>
    <?php endforeach ?>
</table>
        </div>
</body>
</html>