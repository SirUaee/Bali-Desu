<?php 

session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'function.php';

$id = $_GET["id"];
$code = $_GET["code"];

if(hapusanime($id) > 0){
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