<?php 
require 'function.php';

    if(isset($_POST["register"])){
        if(gantipw($_POST) > 0){
            echo "<script>
            alert ('Password berhasil diganti!');
            document.location.href = 'login.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="asset/stylelogin2.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Desu | Lupa Password</title>
</head>
<img src="kafka2.jpg" alt="" >
<body >
<div class="container login-container">
        <h2 class="text-center mb-4">Ganti Password</h2>
    <form action="" method="post">
                <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control"  id="username" placeholder="username">
                </div>    
                <div class="form-group">
                <label for="password">Password Baru:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="password Baru">
                </div>
                <div class="form-group">
                <label for="password2">Komfirmasi Password:</label>
                <input type="password" name="password2"  class="form-control" id="password2" placeholder="Konfirmasi Password">
                </div>

                <button type="submit" name="register"class="btn btn-primary btn-block ">Ganti</button>
    <hr>
                <div class="text-center">
                    <p><a href="login.php">Sudah Ingat?</a></p>
                    <p><a href="register.php">Belum Punya Akun?</a></p>
                </div>
        </ul>
    </form>
    </div>
</body>
</html>