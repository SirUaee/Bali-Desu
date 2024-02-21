<?php 
require 'function.php';
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
$id = $_GET['idEps'];
if(hapuseps($id) > 0){
    echo "
        <script>
            alert('data berhasil di hapus');
            document.location.href = 'halamanAdmin.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('data gagal di hapus');
            document.location.href = 'halamanAdmin.php';
        </script>
    ";
}
?>