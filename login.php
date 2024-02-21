<?php 
require 'function.php';
session_start();

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    // cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)){
        if($row['username'] == 'admin'){
            if($password == 'admin'){
                $_SESSION['login'] = true;
                $_SESSION['is_admin'] = true;
                if(isset($_POST['remember'])) {
                    setcookie('id', $row['id'], time()+ 60 );
                    setcookie('key',hash('sha256', $row['username']), time()+ 60 );
                }
                header("Location: halamanAdmin.php");
                exit;
            }
        }
        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
            $_SESSION['is_admin'] = false;
            if(isset($_POST['remember'])) {
                setcookie('id', $row['id'], time()+ 60 );
                setcookie('key',hash('sha256', $row['username']), time()+ 60 );
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;

}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="img/D.jpg">
        <title>Bali Desu | Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="asset/stylelogin2.css">   
    </head>


    <body >
        <img src="kafka2.jpg" alt="" >
        <div class="container login-container">
        <h2 class="text-center mb-4">Login</h2>
        <?php if( isset($error) ) : ?>
    <?php echo "<script>alert('username / password salah!')</script>"; ?>
        <?php endif; ?>
    <form action="" method="post">
    <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" id="username" require autocomplete="off" autocorrect="off" placeholder="Username"> 
    </div>
    <div class="form-group">
            <label for="username">Username:</label>
             <input type="password" name="password" class="form-control" id="password" require autocomplete="off" autocorrect="off" placeholder="Password">
    </div>
    <div class="form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
             <label for="remember"  class="form-check-label" >Remember me</label>
    </div>

                <button type="submit" name="login" class="btn btn-primary btn-block mt-3">Login</button><br>
            <hr>

            <div class="text-center">
            <p>Tidak Memiliki Akun? <a href="register.php">Buat Akun</a></p>
               <a href="lupapw.php">LupaPassword</a>
               </div>
</form>
        </div>
       
   </body>
</html>