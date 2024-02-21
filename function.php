<?php 
$conn = mysqli_connect("localhost", "root", "", "film");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }   
    return $rows;
}
function quera($quera) {
    global $conn;
    $result = mysqli_query($conn, $quera);
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }   
    return $rows;
}

function cari($keyword){
    $query = "SELECT * FROM anime
                WHERE 
                judul LIKE '%$keyword%'OR
                code LIKE '%$keyword%'
                ";
    return query($query);
}

function registrasi($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }
    if($password != $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);

}
function gantipw($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
     if($password != $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }
    if(mysqli_fetch_assoc($result)){
        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "UPDATE user SET password = '$password' WHERE username = '$username'");
        return mysqli_affected_rows($conn);
    
    }
  

    
}


function tambah($data){
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $code = htmlspecialchars($data["code"]);
    $skor = htmlspecialchars($data["skor"]);
    $status = htmlspecialchars($data["status"]);
    $totalepisode = htmlspecialchars($data["totalEpisode"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $tglrilis = htmlspecialchars($data["tglrilis"]);
    $studio = htmlspecialchars($data["studio"]);
    $genre = htmlspecialchars($data["genre"]);
    $jadwal = htmlspecialchars($data["jadwal"]);

    $gambar = upload();
    if( !$gambar ){
        return false;
    }

    $query = "INSERT INTO anime 
    VALUES
    ('', '$judul','$code', '$skor', '$status', '$totalepisode', '$durasi', '$tglrilis', '$studio', '$genre', '$jadwal','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['poster']['name'];
    $ukuranFile = $_FILES['poster']['size'];
    $error = $_FILES['poster']['error'];
    $tmpName = $_FILES['poster']['tmp_name'];

    if($error === 4){
        echo "<script>
                alert('masukan gambar terlebih dahulu');
            </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('Yang anda upload bukan gambar')
            </script>";
            return false;
    }

    if($ukuranFile > 10000000){
        echo "<script>
                alert('Ukuran gambar terlalu besar')
            </script>";
            return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $skor = htmlspecialchars($data["skor"]);
    $status = htmlspecialchars($data["status"]);
    $totalepisode = htmlspecialchars($data["totalEpisode"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $tglrilis = htmlspecialchars($data["tglrilis"]);
    $studio = htmlspecialchars($data["studio"]);
    $genre = htmlspecialchars($data["genre"]);
    $jadwal = htmlspecialchars($data["jadwal"]);
    $posterlama = htmlspecialchars($data["posterLama"]);
    
    if($_FILES['poster']['error'] === 4){
        $poster = $posterlama;
    }else{
        $poster = upload();
    }

    $query = "UPDATE anime SET
                judul = '$judul',
                skor = '$skor',
                status = '$status',
                total_episode = '$totalepisode',
                durasi = '$durasi',
                tgl_rilis = '$tglrilis',
                studio = '$studio',
                genre = '$genre',
                jadwal = '$jadwal',
                poster = '$poster'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function uploadvidio(){
    $namaFile = $_FILES['vidio']['name'];
    $ukuranFile = $_FILES['vidio']['size'];
    $error = $_FILES['vidio']['error'];
    $tmpName = $_FILES['vidio']['tmp_name'];

    if($error === 4){
        echo "<script>
                alert('masukan vidio terlebih dahulu');
            </script>";
        return false;
    }

    $ekstensiVidioValid = ['mp4', 'mkv'];
    $ekstensiVidio = explode('.', $namaFile);
    $ekstensiVidio = strtolower(end($ekstensiVidio));
    if (!in_array($ekstensiVidio, $ekstensiVidioValid)){
        echo "<script>
                alert('Yang anda upload bukan gambar')
            </script>";
            return false;
    }
    // if($ukuranFile > 10000000){
    //     echo "<script>
    //             alert('Ukuran gambar terlalu besar')
    //         </script>";
    //         return false;
    // }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiVidio;

    move_uploaded_file($tmpName, 'vid/' . $namaFileBaru);
    return $namaFileBaru;
}


function hapusanime($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM anime WHERE id = $id");
    mysqli_query($conn, "DELETE FROM episode WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function tambaheps($data){
    global $conn;
    $id = $data["id"];
    $code = $data["code"];
    $judul = htmlspecialchars($data["judul"]);
    $episode = htmlspecialchars($data["eps"]);
    $tglrilis = htmlspecialchars($data["tglrilis"]);
    
    $vidio = uploadvidio();
    if( !$vidio ){
        return false;
    }

    $query = "INSERT INTO episode 
    VALUES
    ('', '$judul', '$episode','$id', '$code', '$tglrilis', '$vidio')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function ubaheps($data){
    global $conn;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $episode = htmlspecialchars($data["eps"]);
    $tglrilis = htmlspecialchars($data["tglrilis"]);
    $vidiolama = htmlspecialchars($data["vidiolama"]);
    
    if($_FILES['vidio']['error'] === 4){
        $vidio = $vidiolama;
    }else{
        $vidio = uploadvidio();
    }

    $query = "UPDATE episode SET
    episode = '$judul',
    eps = '$episode',
    tglRilisEps = '$tglrilis',
    vidio = '$vidio'
    WHERE idEps = $id";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function hapuseps($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM episode WHERE idEps = $id");
    return mysqli_affected_rows($conn);
}
?>

